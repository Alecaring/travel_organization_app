<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;
use App\Services\TwilioService; // Assicurati di includere il servizio Twilio
use Illuminate\Support\Facades\Log;

class RegisteredUserController extends Controller
{
    /**
     * Show the first registration step.
     */
    public function create(): View
    {
        return view('auth.register_step1');
    }

    /**
     * Handle the first step of registration.
     */
    public function handleStep1(Request $request): RedirectResponse
    {
        // Validate the first step
        $request->validate([
            'email' => ['nullable', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
            'phone' => ['nullable', 'string', 'regex:/^[0-9]{10}$/', 'unique:users'],
        ]);

        if (empty($request->email) && empty($request->phone)) {
            return back()->withErrors(['email' => 'Inserisci una email o un numero di telefono']);
        }

        // Save to session
        Session::put('register_step1', $request->only(['email', 'phone']));

        return redirect()->route('register.step2');
    }

    /**
     * Show the second registration step.
     */
    public function showStep2(): View
    {
        return view('auth.register_step2');
    }

    /**
     * Handle the second step of registration.
     */
    public function handleStep2(Request $request): RedirectResponse
    {
        // Retrieve data from the session
        $step1Data = Session::get('register_step1');

        if (!$step1Data) {
            Log::error('Sessione scaduta o dati della sessione non trovati');
            return redirect()->route('register.step1')->withErrors(['error' => 'Sessione scaduta, riprova.']);
        }

        // Validate the second step
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Generate confirmation code
        $code = rand(100000, 999999);

        // Check if email or phone is set and send the appropriate confirmation
        if (!empty($step1Data['email'])) {
            Log::info('Invio email di conferma a: ' . $step1Data['email']);
            try {
                Mail::to($step1Data['email'])->send(new \App\Mail\ConfirmationCode($code));
                Log::info('Email di conferma inviata con successo.');
            } catch (\Exception $e) {
                Log::error('Errore durante l\'invio dell\'email: ' . $e->getMessage());
            }
        } elseif (!empty($step1Data['phone'])) {
            Log::info('Invio messaggio WhatsApp di conferma al numero: ' . $step1Data['phone']);
            try {
                app(TwilioService::class)->sendWhatsAppMessage($step1Data['phone'], $code);
                Log::info('Messaggio WhatsApp inviato con successo.');
            } catch (\Exception $e) {
                Log::error('Errore durante l\'invio del messaggio WhatsApp: ' . $e->getMessage());
            }
        }

        // Merge step1 data with step2 data and create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $step1Data['email'] ?? null,
            'phone' => $step1Data['phone'] ?? null,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        Auth::login($user);

        // Clear session data
        Session::forget('register_step1');

        return redirect(RouteServiceProvider::HOME);
    }
}
