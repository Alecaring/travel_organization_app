@extends('layouts.log.register')

@section('content')
{{-- register_step2.blade.php --}}

<div class="container">
    <h2>Completa la Registrazione</h2>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('register.step2.post') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="username" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="password_confirmation">Conferma Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Registrati</button>
    </form>
</div>

@endsection
