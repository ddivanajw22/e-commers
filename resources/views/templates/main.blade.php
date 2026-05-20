<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ravenelle - Fashion Store</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    </head>

    
<body>

    <nav class="navbar">
        <div class="logo">
            <h2>Ravenelle</h2>
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

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
        <p>&copy; 2026 Ravenelle</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>