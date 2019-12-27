@extends('pages.layouts.login_layout')

@section('content')
	<input type="hidden" id="last_clicked_page" name="last_clicked_page" value="{{ old('submit-type') }}">
	<div class="kt-login__signin">
		<div class="kt-login__head">
			<h3 class="kt-login__title">Sign In</h3>
			<div class="kt-login__desc">Enter your details to access your account:</div>
		</div>

		<form method="POST" class="kt-form" action="{{ route('login') }}">
			@csrf

			<input type="hidden" name="submit-type" value="signin">

			<div class="input-group">
				<input required value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" autocomplete="email" autofocus>

				@if(old("submit-type") == "signin")
					@error('email')
						<div id="login-email-error" class="error invalid-feedback">
							<strong>{{ $message }}</strong>
						</div>
                    @enderror
                @endif
			</div>

			<div class="input-group">
				<input class="form-control  @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="current-password">

				@if(old("submit-type") === "signin")
					@error('password')
						<div id="login-password-error" class="error invalid-feedback">
							<strong>{{ $message }}</strong>
						</div>
                    @enderror
                @endif    
			</div>

			<div class="row kt-login__extra">
				<div class="col">
					<label class="kt-checkbox">
						<input {{ old('remember') ? 'checked' : '' }} id="remember" type="checkbox" name="remember"> Remember me
						<span></span>
					</label>
				</div>

				<div class="col kt-align-right">
					<a id="kt_login_forgot" class="kt-login__link cursor-pointer">Forget Password ?</a>
				</div>
			</div>

			<div class="kt-login__actions">
				<button type="submit" id="kt_login_signin_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Sign In</button>
			</div>
		</form>
	</div>

	<div class="kt-login__signup">
		<div class="kt-login__head">
			<h3 class="kt-login__title">Sign Up</h3>
			<div class="kt-login__desc">Enter your details to create your account:</div>
		</div>
		<form class="kt-form" method="POST" action="{{ route('register') }}">
			@csrf

			<input type="hidden" name="submit-type" value="register">

			<div class="input-group">
				<input value="{{ old('name') }}" id="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Fullname" name="name" required autocomplete="name" autofocus>

				@if(old("submit-type") === "register")
					@error('name')
                        <div id="register-name-error" class="error invalid-feedback">
							<strong>{{ $message }}</strong>
						</div>
                    @enderror
                @endif
			</div>

			<div class="input-group"> 
				<input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" autocomplete="off" value="{{ old('email') }}" required autocomplete="email">

				@if(old("submit-type") === "register")
					@error('email')
                        <div id="register-email-error" class="error invalid-feedback">
							<strong>{{ $message }}</strong>
						</div>
                    @enderror
                @endif
			</div>

			<div class="input-group">
				<input id="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="new-password">

				@if(old("submit-type") === "register")
					@error('password')
                        <div id="register-password-error" class="error invalid-feedback">
							<strong>{{ $message }}</strong>
						</div>
                    @enderror
                @endif
			</div>

			<div class="input-group">
				<input id="password-confirm" class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
			</div>

			<div class="row kt-login__extra">
				<div class="col kt-align-left">
					<label class="kt-checkbox">
						<input type="checkbox" name="agree">I Agree the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
						<span></span>
					</label>
					<span class="form-text text-muted"></span>
				</div>
			</div>

			<div class="kt-login__actions">
				<button type="submit" id="kt_login_signup_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">
					Sign Up
				</button>&nbsp;&nbsp;

				<button id="kt_login_signup_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">
					Cancel
				</button>
			</div>
		</form>
	</div>

	<div class="kt-login__forgot">
		<div class="kt-login__head">
			<h3 class="kt-login__title">Forgotten Password ?</h3>
			<div class="kt-login__desc">Enter your email to reset your password:</div>
		</div>

		<form class="kt-form" method="POST" action="{{ route('password.email') }}">
			@csrf

			@if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

			<input type="hidden" name="submit-type" value="forget">

			<div class="input-group">
				<input name="email" type="email" id="email" class="form-control @error('email') is-invalid @enderror" type="text" placeholder="Email" autocomplete="email" value="{{ old('email') }}" required autofocus>

				@if(old("submit-type") == "forget")
					@error('email')
						<div id="forget-email-error" class="error invalid-feedback">
							<strong>{{ $message }}</strong>
						</div>
                    @enderror
                @endif
			</div>

			<div class="kt-login__actions">
				<button type="submit" id="kt_login_forgot_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">
					Request
				</button>&nbsp;&nbsp;

				<button id="kt_login_forgot_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">
					Cancel
				</button>
			</div>
		</form>
	</div>

	<div class="kt-login__account">
		<span class="kt-login__account-msg">
			Don't have an account yet?
		</span>
		&nbsp;&nbsp;
		<a id="kt_login_signup" class="kt-login__account-link cursor-pointer">
			Sign Up!
		</a>
	</div>
@endsection