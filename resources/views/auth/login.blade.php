@extends('layouts.app')

@section('content')
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="{{ route('index') }}">Anasayfa</a></li>
					<li class="active">Giriş Yap</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--account-starts-->
	<div class="account">
		<div class="container">
		<div class="account-top heading">
				<h2>Giriş Yap</h2>
			</div>
			<div class="account-main">
				<div class="col-md-6 account-left">
					<h3>Mevcut Kullanıcı</h3>
					<div class="account-bottom">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

						<input placeholder="Email" type="text" tabindex="3" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
						 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <input placeholder="Password" type="password" tabindex="4" @error('password') is-invalid @enderror" name="password"  required>

						<div class="address">
							<a class="forgot" href="#">Forgot Your Password?</a>
                            
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							<input type="submit" value="Login">
						</div>
                        </form>
					</div>
				</div>
				<div class="col-md-6 account-right account-left">
					<h3>Yeni Kullanıcı Mısın? Ücretsiz Kayıt Ol</h3>
					<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
					<a href="{{ url('register') }}">Kayıt Ol</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

@endsection
