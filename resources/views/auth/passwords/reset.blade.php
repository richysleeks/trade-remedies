@extends('pages.layouts.login_layout')

@section('content')
    <div class="kt-login__reset">
        <div class="kt-login__head">
            <h3 class="kt-login__title">Reset Password</h3>
            <div class="kt-login__desc">Enter details to change password:</div>
        </div>

        <form method="POST" class="kt-form" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">
            
            <div class="input-group">
                <input required value="{{ $email ?? old('email') }}" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" autocomplete="email">

                @error('email')
                    <div id="change-email-error" class="error invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="input-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="New Password" required autocomplete="new-password" autofocus>

                @error('password')
                    <div id="change-password-error" class="error invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="input-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
            </div>

            <div class="kt-login__actions">
                <button type="submit" id="kt_login_change_password_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Reset Password</button>
            </div>
        </form>
    </div>
@endsection