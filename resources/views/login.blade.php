@extends('templates.main')

@section('content')

<div class="login-wrapper">

    <div class="login-container">
        
        <div class="login-left">
            
            <h1 class="logo-title">
                Ravenelle
            </h1>
            
            <div class="switch-box">
                <button class="active-btn">Login</button>
                <button class="inactive-btn">Register</button>
            </div>

            <form action="" method="POST" class="login-form">

                @csrf

                <div class="input-group">
                    <span class="input-icon">
                        <i class="fa-regular fa-user"></i>
                    </span>

                    <input 
                        type="email"
                        name="email"
                        placeholder="Email"
                        class="input-box">
                </div>

                <div class="input-group">
                    <span class="input-icon">
                        <i class="fa-solid fa-lock"></i>
                    </span>

                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        class="input-box">
                </div>

                <div class="remember-box">

                    <label class="remember-label">
                        <input type="checkbox" name="remember">
                        <span>Remember me</span>
                    </label>

                    <a href="#" class="forgot-link">
                        Forgot Password?
                    </a>

                </div>

                <button type="submit" class="login-btn">
                    Login
                </button>

            </form>

            <div class="divider">

                <div class="line"></div>

                <span class="or-text">
                    or
                </span>

                <div class="line"></div>

            </div>

            <div class="social-login">

                <p class="social-title">
                    Login With
                </p>

                <div class="social-icons">

                    <button class="social-btn">
                        G
                    </button>

                    <button class="social-btn">
                        <i class="fa-brands fa-facebook-f"></i>
                    </button>

                </div>

            </div>

        </div>

        <div class="login-right">

            <img
                src="{{ asset('images/login_register_foto.jpg') }}"
                alt="Profile"
                class="login-image">

            <div class="overlay"></div>

        </div>

    </div>

</div>

@endsection