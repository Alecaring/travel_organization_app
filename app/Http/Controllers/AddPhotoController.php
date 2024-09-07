<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddPhotoController extends Controller
{
    public function store(Request $request)
    {
        // Validazione dell'immagine
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'descriprion' => 'nullable|string|max:255', // Aggiungi qualsiasi altra validazione necessaria
        ]);

        // Controlla se c'è un'immagine nel request
        if ($request->hasFile('image')) {
            // Carica l'immagine nella directory 'public/images'
            $imagePath = $request->file('image')->store('images', 'public');

            // Ottieni il percorso URL pubblico
            $imageUrl = asset('storage/' . $imagePath);

            // Crea un nuovo post associato all'utente
            $post = new Post();
            $post->user_id = Auth::id(); // Ottieni l'ID dell'utente autenticato
            $post->descriprion = $request->input('descriprion');
            $post->src = $imagePath; // Salva il percorso dell'immagine
            $post->save();

            // Ridireziona con successo e passare il percorso dell'immagine
            return redirect()->back()->with('success', 'Immagine caricata con successo!')->with('image_url', $imageUrl);
        }

        // Ridireziona con errore se l'immagine non è stata caricata
        return redirect()->back()->with('error', 'Nessun file immagine trovato');
    }
}
