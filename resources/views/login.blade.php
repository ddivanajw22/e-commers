@extends('templates.main')

@section('content')

<div class="login-wrapper">

    <div class="login-container">
        
        <div class="login-left">
            
            <h1 class="logo-title">
                Ravenelle
            </h1>
            
            <div class="switch-box">
                <button class="active-btn" href="/profile">Login</button>
                <button class="inactive-btn" href="/register">Register</button>
            </div>
<form action="/login" method="POST">

            @csrf

            <div class="input-group">
                <label>Email</label>

                <input type="email"
                name="email"
                placeholder="Masukkan email">
            </div>

            <div class="input-group">
                <label>Password</label>

                <input type="password"
                name="password"
                placeholder="Masukkan password">
            </div>

            <div class="input-group">

                <label>Login Sebagai</label>

                <select name="role">

                    <option value="pelanggan">
                        Pelanggan
                    </option>

                    <option value="seller">
                        Seller/Admin
                    </option>

                </select>

            </div>

            <button type="submit"
class="btn-login">Login</button>

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