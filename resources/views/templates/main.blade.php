<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>E-Commerce Fashion</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar">

        <div class="logo">
            <h2>Fashion Store</h2>
        </div>

        <ul class="menu">
            <li><a href="/">Home</a></li>
            <li><a href="/wishlist">Wishlist</a></li>
            <li><a href="/checkout">Cart</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/login">Login</a></li>
        </ul>

    </nav>

    <!-- CONTENT -->
    <div class="container">

        @yield('content')

    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <p>© 2026 Fashion Store</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>