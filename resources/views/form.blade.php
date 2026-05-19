@extends('templates.main')

@section('content')

<div class="form-container">

    {{-- LOGIN --}}
    <div class="form-box">

        <h2>Login Ravenelle</h2>

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
            class="btn-login">

                Login

            </button>

        </form>

    </div>

    {{-- REGISTER --}}
    <div class="form-box">

        <h2>Register Account</h2>

        <form action="/register"
        method="POST"
        enctype="multipart/form-data">

            @csrf

            <div class="input-group">

                <label>Nama Lengkap</label>

                <input type="text"
                name="name"
                placeholder="Masukkan nama">

            </div>

            <div class="input-group">

                <label>Email</label>

                <input type="email"
                name="email"
                placeholder="Masukkan email">

            </div>

            <div class="input-group">

                <label>No HP</label>

                <input type="text"
                name="phone"
                placeholder="08xxxxxxxxxx">

            </div>

            <div class="input-group">

                <label>Password</label>

                <input type="password"
                name="password"
                placeholder="Masukkan password">

            </div>

            <div class="input-group">

                <label>Role</label>

                <select name="role">

                    <option value="pelanggan">
                        Pelanggan
                    </option>

                    <option value="seller">
                        Seller/Admin
                    </option>

                </select>

            </div>

            <div class="input-group">

                <label>Foto Profile</label>

                <input type="file"
                name="photo">

            </div>

            <button type="submit"
            class="btn-register">

                Register

            </button>

        </form>

    </div>

</div>

@endsection