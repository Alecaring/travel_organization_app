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
use Illuminate\Support\Facades\Log;

class RegisteredUserController extends Controller
{
    /**
     * Show the first registration step.
     */
    public function showStep1(): View
    {
        return view('auth.register_step1');
    }

    /**
     * Handle the first step of registration.
     */
    public function handleStep1(Request $request): RedirectResponse
    {
        // Validate the first step [email]
        $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
        ]);

        // Generate verification code
        $code = rand(100000, 999999);

        // Generate a temporary password (allows user to proceed to step 2)
        $temporaryPassword = Hash::make('11111111');

        // Create a new user with email and OTP only
        $user = User::create([
            'email' => $request->email,
            'otp' => $code,
            'password' => $temporaryPassword,
        ]);

        // Send the OTP confirmation code via email
        try {
            Mail::to($user->email)->send(new \App\Mail\ConfirmationCode($code));
        } catch (\Exception $e) {
            return back()->withErrors(['email' => 'Si è verificato un errore durante l\'invio dell\'email di conferma. Riprova più tardi.']);
        }

        // Save the user ID for the next step
        Session::put('user_id', $user->id);

        // Redirect to step 2
        return redirect()->route('register.otp');
    }

    public function showOtpControll(): View
    {
        return view('auth.register_otp');
    }

    public function handleOtpControll(Request $request): RedirectResponse
    {
        // Validate the OTP code
        $request->validate([
            'otp' => ['required', 'digits:6'],
        ]);

        $userId = Session::get('user_id');

        if ($userId) {
            $user = User::find($userId);
            if ($user) {
                // Check OTP match
                if ($user->otp == $request->otp) {
                    // Redirect to step 2
                    return redirect()->route('register.step2');
                } else {
                    // OTP does not match
                    return back()->withErrors(['otp' => 'Il codice OTP non corrisponde.']);
                }
            } else {
                // User not found (unexpected error)
                return back()->withErrors(['email' => 'Utente non trovato, riprova il processo di registrazione.']);
            }
        } else {
            // No user ID in session, could be expired
            return redirect()->route('register.step1')->withErrors(['email' => 'Sessione scaduta, riprova.']);
        }
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
        // Validate the second step
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $userId = Session::get('user_id');
        $user = User::find($userId);



        if (!$user) {
            Log::error('Utente non trovato per l\'email: ' . $request->session()->get('register_email'));
            return back()->withErrors(['email' => 'Utente non trovato, riprova il processo di registrazione.']);
        }

        // Update the user's information
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->otp = null; // Clear OTP after successful registration
        $user->email_verified_at = now();
        $user->save();

        // Log in the user
        Auth::login($user);

        // Clear session data
        $request->session()->forget('register_email');

        // Redirect to the home page
        return redirect(RouteServiceProvider::HOME);
    }
}
