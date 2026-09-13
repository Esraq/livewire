@extends('layouts.app')

@section('content')

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: "Segoe UI", Arial, sans-serif;
        background: #f4f8f6;
    }

    .login-page {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px 15px;
        background:
            linear-gradient(135deg, rgba(0, 102, 51, 0.08), rgba(255,255,255,0.95)),
            #f4f8f6;
    }

    .login-wrapper {
        width: 100%;
        max-width: 1000px;
        min-height: 580px;
        display: flex;
        background: #ffffff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 45px rgba(0, 77, 38, 0.15);
    }

    /* LEFT SIDE */
    .login-left {
        width: 45%;
        background: linear-gradient(
            145deg,
            #006633,
            #004d26
        );
        color: white;
        padding: 55px 45px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .login-left::before {
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: rgba(255,255,255,0.05);
        top: -100px;
        right: -100px;
    }

    .login-left::after {
        content: "";
        position: absolute;
        width: 250px;
        height: 250px;
        border-radius: 50%;
        background: rgba(255,255,255,0.04);
        bottom: -100px;
        left: -100px;
    }

    .university-logo {
        width: 95px;
        height: 95px;
        object-fit: contain;
        background: white;
        border-radius: 50%;
        padding: 10px;
        margin-bottom: 30px;
        position: relative;
        z-index: 2;
    }

    .login-left h1 {
        font-size: 38px;
        font-weight: 700;
        margin-bottom: 15px;
        position: relative;
        z-index: 2;
    }

    .login-left p {
        font-size: 17px;
        line-height: 1.7;
        opacity: 0.9;
        margin-bottom: 30px;
        position: relative;
        z-index: 2;
    }

    .university-name {
        font-size: 20px;
        font-weight: 600;
        position: relative;
        z-index: 2;
    }

    .welcome-line {
        width: 65px;
        height: 4px;
        background: white;
        border-radius: 5px;
        margin: 20px 0;
        position: relative;
        z-index: 2;
    }

    /* RIGHT SIDE */
    .login-right {
        width: 55%;
        padding: 55px 65px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .login-header {
        margin-bottom: 35px;
    }

    .login-header h2 {
        color: #006633;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .login-header p {
        color: #777;
        font-size: 15px;
        margin: 0;
    }

    .form-group {
        margin-bottom: 22px;
    }

    .form-label {
        display: block;
        font-size: 15px;
        font-weight: 600;
        color: #333;
        margin-bottom: 9px;
    }

    .input-wrapper {
        position: relative;
    }

    .input-icon {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: #006633;
        font-size: 16px;
        z-index: 2;
    }

    .form-control-custom {
        width: 100%;
        height: 52px;
        padding: 0 45px;
        border: 1px solid #d8e2dc;
        border-radius: 9px;
        background: #f9fbfa;
        color: #333;
        font-size: 15px;
        outline: none;
        transition: all 0.3s ease;
    }

    .form-control-custom:focus {
        border-color: #006633;
        background: white;
        box-shadow: 0 0 0 3px rgba(0, 102, 51, 0.10);
    }

    .password-toggle {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        border: none;
        background: transparent;
        color: #777;
        cursor: pointer;
        padding: 5px;
    }

    .password-toggle:hover {
        color: #006633;
    }

    .login-options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 5px 0 25px;
    }

    .remember-me {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #555;
        font-size: 14px;
        cursor: pointer;
    }

    .remember-me input {
        width: 16px;
        height: 16px;
        accent-color: #006633;
        cursor: pointer;
    }

    .forgot-password {
        color: #006633;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
    }

    .forgot-password:hover {
        color: #004d26;
        text-decoration: underline;
    }

    .login-button {
        width: 100%;
        height: 52px;
        border: none;
        border-radius: 9px;
        background: linear-gradient(
            135deg,
            #006633,
            #008044
        );
        color: white;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0, 102, 51, 0.20);
    }

    .login-button:hover {
        background: linear-gradient(
            135deg,
            #004d26,
            #006633
        );
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 102, 51, 0.25);
    }

    .login-button i {
        margin-right: 8px;
    }

    .security-note {
        text-align: center;
        color: #999;
        font-size: 12px;
        margin-top: 25px;
    }

    .security-note i {
        color: #006633;
        margin-right: 5px;
    }

    .invalid-feedback {
        display: block;
        color: #dc3545;
        font-size: 13px;
        margin-top: 6px;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {

        .login-wrapper {
            flex-direction: column;
            max-width: 500px;
        }

        .login-left,
        .login-right {
            width: 100%;
        }

        .login-left {
            padding: 40px 30px;
            min-height: 280px;
        }

        .login-left h1 {
            font-size: 30px;
        }

        .login-left p {
            font-size: 15px;
        }

        .university-logo {
            width: 75px;
            height: 75px;
            margin-bottom: 20px;
        }

        .login-right {
            padding: 40px 30px;
        }
    }

    @media (max-width: 480px) {

        .login-page {
            padding: 15px;
        }

        .login-wrapper {
            border-radius: 15px;
        }

        .login-left {
            padding: 30px 25px;
        }

        .login-right {
            padding: 35px 25px;
        }

        .login-header h2 {
            font-size: 27px;
        }

        .login-options {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
        }
    }
</style>


<div class="login-page">

    <div class="login-wrapper">

        <!-- LEFT SIDE -->
        <div class="login-left">

            <img
                src="{{ asset('admin/img/logo/logo.png') }}"
                alt="University Logo"
                class="university-logo"
            >

            <div class="welcome-line"></div>

            <h1>Welcome Back!</h1>

            <p>
                Welcome to the University Management System.
                Sign in to access your academic and administrative
                dashboard.
            </p>

            <div class="university-name">
                University Management System
            </div>

        </div>


        <!-- RIGHT SIDE -->
        <div class="login-right">

            <div class="login-header">
                <h2>Sign In</h2>
                <p>Enter your credentials to access your account.</p>
            </div>


            <form method="POST" action="{{ route('login') }}">

                @csrf

                <!-- EMAIL -->
                <div class="form-group">

                    <label for="email" class="form-label">
                        Email Address
                    </label>

                    <div class="input-wrapper">

                        <i class="fas fa-envelope input-icon"></i>

                        <input
                            id="email"
                            type="email"
                            class="form-control-custom @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Enter your email address"
                            required
                            autocomplete="email"
                            autofocus
                        >

                    </div>

                    @error('email')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror

                </div>


                <!-- PASSWORD -->
                <div class="form-group">

                    <label for="password" class="form-label">
                        Password
                    </label>

                    <div class="input-wrapper">

                        <i class="fas fa-lock input-icon"></i>

                        <input
                            id="password"
                            type="password"
                            class="form-control-custom @error('password') is-invalid @enderror"
                            name="password"
                            placeholder="Enter your password"
                            required
                            autocomplete="current-password"
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword()"
                            aria-label="Show password"
                        >
                            <i class="fas fa-eye" id="passwordIcon"></i>
                        </button>

                    </div>

                    @error('password')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror

                </div>


                <!-- OPTIONS -->
                <div class="login-options">

                    <label class="remember-me">

                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            {{ old('remember') ? 'checked' : '' }}
                        >

                        <span>Remember Me</span>

                    </label>


                    @if (Route::has('password.request'))

                        <a
                            href="{{ route('password.request') }}"
                            class="forgot-password"
                        >
                            Forgot Password?
                        </a>

                    @endif

                </div>


                <!-- LOGIN BUTTON -->
                <button type="submit" class="login-button">

                    <i class="fas fa-sign-in-alt"></i>

                    Sign In

                </button>


                <div class="security-note">

                    <i class="fas fa-shield-alt"></i>

                    Your login information is securely protected.

                </div>

            </form>

        </div>

    </div>

</div>


<script>

function togglePassword() {

    const password = document.getElementById('password');
    const icon = document.getElementById('passwordIcon');

    if (password.type === 'password') {

        password.type = 'text';

        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');

    } else {

        password.type = 'password';

        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');

    }

}

</script>

@endsection