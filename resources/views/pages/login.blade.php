<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <div style="max-width: 400px; margin: 50px auto;">
        <h2>Login</h2>

        <form action="{{ route('login.perform') }}" method="POST">
            @csrf <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                @error('email')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <br>

            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
                @error('password')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <br>

            <button type="submit">Log In</button>
        </form>
        <p style="margin-top: 20px;">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
    </div>
</body>
</html>