@extends('layouts.log.register')

@section('content')
    {{-- register_step2.blade.php --}}

    <div class="container text-white">
        <h2 class="py-3 pt-5">Completa la Registrazione</h2>

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
            <div class="input-group py-3">
                <span class="input-group-text">@</span>
                <div class="form-floating text-dark">
                    <input name="username" type="text" class="form-control" id="username" value="{{ old('username') }}"
                        required placeholder="Username">
                    <label for="username">Username</label>
                </div>
            </div>

            <div class="form-floating mb-3 text-dark">
                <input type="text" name="nameComplete" class="form-control" id="nameCoplete"
                    placeholder="Inserisci il tuo nome" value="{{ old('nameCoplete') }}" required>
                <label for="nameCoplete">Inserisci il tuo nome</label>
            </div>

            <div class="form-floating mb-3 text-dark">
                <input name="password" type="password" class="form-control" id="Password" placeholder="Password:" required>
                <label for="Password">Password:</label>
            </div>
            
            <div class="form-floating mb-3 text-dark">
                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Conferma Password:" required>
                <label for="password_confirmation">Conferma Password:</label>
            </div>
            

            

            <button type="submit" class="btn btn-primary">Registrati</button>
        </form>
    </div>

@endsection
