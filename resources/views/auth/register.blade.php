@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{ route('index') }}">Anasayfa</a></li>
                    <li class="active">Kayıt Ol</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="register">
        <div class="container">
            <div class="register-top heading">
                <h2>Kayıt Ol</h2>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="register-main">
                    <div class="col-md-6 account-left">
                        <input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Adınız" name="name"
                            value="{{ old('name') }}" type="text" tabindex="1" required>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email" name="email"
                            value="{{ old('email') }}" type="text" tabindex="1" required>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password"
                           value="{{ old('password') }}"  type="password" name="password" tabindex="4" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <input placeholder="Retype password" name="password_confirmation" id="" type="password" tabindex="4" required>

                    </div>

                    <div class="address submit">
                        <input type="submit" value="Submit">
                    </div>
            </form>
        </div>
    </div>


@endsection
