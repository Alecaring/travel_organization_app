@extends('layouts.log.login')

@section('content')
    {{-- center --}}
    <div class="loginCenterCont">
        
        <div class="loginCenterContBubleAccessCont mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google"
                viewBox="0 0 16 16">
                <path
                    d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
            </svg><span>continua con goolge</span>
        </div>
        <div class="loginCenterContBubleAccessCont mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-facebook"
                viewBox="0 0 16 16">
                <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
            </svg><span>continua con facebook</span>
        </div>

        <span class="hr">
            <span>o</span>
        </span>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-floating mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email"
                    autofocus>
                <label class="text-dark" for="email"><small>Numero di telefono, nome utente o e-mail</small></label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    placeholder="Password" name="password" required autocomplete="current-password">
                <label class="text-dark" for="password"><small>Password</small></label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            
            @if (Route::has('password.request'))
                <a class="btn btn-link text-white text-end w-100 mb-4" href="{{ route('password.request') }}">
                    {{ __('Password dimenticata?') }}
                </a>
            @endif



            <div class="mb-4 bottoneAccedi p-0">
                <div class="w-100">
                    <button type="submit" class="bottoneAccedi">
                        {{ __('Accedi') }}
                    </button>


                </div>
            </div>
        </form>
        <span class="w-100 text-center d-block">Non hai un account? <a class="text-white" href="{{ route('register.step1') }}">Iscriviti</a></span>
    </div>
    {{-- /center --}}
@endsection
