<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AddPhotoController extends Controller
{
    public function createPhoto(Request $request) {

        $validateData = $request->validate([
            'descriprion' => 'nullable|',
            'src' => 'required|'
        ]);


    }
}
