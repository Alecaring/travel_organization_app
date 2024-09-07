@extends('layouts.admin')

@section('content')
    <!-- Mostra messaggi di successo -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Mostra messaggi di errore -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Mostra URL dell'immagine se è stato caricato correttamente -->
    @if (session('image_url'))
        <div class="alert alert-info">
            Immagine caricata: <a href="{{ session('image_url') }}" target="_blank">{{ session('image_url') }}</a>
        </div>
    @endif

    <form action="{{ route('addPost.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" accept="image/*" id="file">
        <button type="submit">Carica Immagine</button>
    </form>
@endsection
