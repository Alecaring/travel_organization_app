@extends('layouts.log.register')

@section('content')
    {{-- <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-4 row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-4 row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <div class="mainContainerRegister">
        <div class="containerSlideLinks">
            <div id="telefono" class="cel-1 active">
                <span>TELEFONO</span>
            </div>
            <div id="email" class="cel-2">
                <span>INDIRIZZO E-MAIL</span>
            </div>
        </div>

        <!-- Form per Telefono -->
        <div id="containerTelefono" class="tab-content mt-4 w-75 m-auto">
            <form method="POST" action="{{ route('register.step1.post') }}">
                @csrf
                {{-- <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <select class="form-select" aria-label="Prefisso">
                            <option selected>+39</option>
                            <option value="1">+1</option>
                            <option value="44">+44</option>
                            <option value="33">+33</option>
                            <!-- Aggiungi altri prefissi se necessario -->
                        </select>
                    </div>
                    <div class="form-floating">
                        <input type="tel" class="form-control" name="phone" required>
                        <label for="">Numero di telefono</label>
                    </div>
                </div> --}}
                <div class="input-group mb-3">
                    <span class="input-group-text">+39</span>
                    <div class="form-floating">
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Username">
                        <label for="phone">Numero di telefono</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Avanti</button>

        </div>

        <!-- Form per Email -->
        <div id="containerEmail" class="tab-content d-none mt-4 w-75 m-auto">
            {{-- <div class="mb-2">
                    <input type="email" class="form-control" id="emailInput" name="email" placeholder="Indirizzo email"
                        required>
                    <div id="emailSuggestions" class="list-group mt-2"></div>
                </div> --}}
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Indirizzo e-mail">
                <label for="email">Indirizzo e-mail</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Avanti</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const telefonoElem = document.getElementById('telefono');
            const emailElem = document.getElementById('email');
            const contTel = document.getElementById('containerTelefono');
            const contEmail = document.getElementById('containerEmail');

            // Cambia scheda
            telefonoElem.addEventListener('click', function() {
                contEmail.classList.add('d-none');
                contTel.classList.remove('d-none');
                telefonoElem.classList.add('active');
                emailElem.classList.remove('active');
                telefonoElem.style.borderBottom = '1px solid rgb(255, 255, 255)';
                emailElem.style.borderBottom = '0';
            });

            emailElem.addEventListener('click', function() {
                contTel.classList.add('d-none');
                contEmail.classList.remove('d-none');
                emailElem.classList.add('active');
                telefonoElem.classList.remove('active');
                telefonoElem.style.borderBottom = '0';
                emailElem.style.borderBottom = '1px solid rgb(255, 255, 255)';
            });

            // Suggerimenti per l'email
            const emailInput = document.getElementById('emailInput');
            const emailSuggestions = document.getElementById('emailSuggestions');
            const domains = ['@gmail.com', '@yahoo.com', '@outlook.com', '@hotmail.com'];

            emailInput.addEventListener('input', function() {
                const value = emailInput.value.split('@')[0];
                emailSuggestions.innerHTML = ''; // Svuota i suggerimenti precedenti

                if (value) {
                    domains.forEach(function(domain) {
                        const suggestion = document.createElement('div');
                        suggestion.className = 'list-group-item list-group-item-action';
                        suggestion.textContent = value + domain;
                        suggestion.onclick = function() {
                            emailInput.value = suggestion.textContent;
                            emailSuggestions.innerHTML =
                                ''; // Svuota i suggerimenti dopo la selezione
                        };
                        emailSuggestions.appendChild(suggestion);
                    });
                }
            });
        });
    </script>
@endsection
