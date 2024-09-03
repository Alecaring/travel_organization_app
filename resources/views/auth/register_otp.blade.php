@extends('layouts.log.register')

@section('content')
    {{-- register_step2.blade.php --}}

    {{-- @dd($otp) --}}

    <div class="mainContainerRegister">
        <h2 class="text-white">verifica il codice OTP</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.otp.post') }}" method="POST">
            @csrf

            <div class="form-floating">
                <input type="number" class="form-control" name="otp" id="email" placeholder="Indirizzo e-mail">
                <label for="email">OTP</label>
            </div>

            <button type="submit" class="btn btn-primary">Registrati</button>
        </form>
    </div>

@endsection
