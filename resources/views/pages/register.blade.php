<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<div class="container">
    <div style="max-width: 400px; margin: 50px auto;">
        <h2>Create an Account</h2>

        <form action="{{ route('register.perform') }}" method="POST">
            @csrf

            <div>
                <label for="name">Full Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                @error('name') <p style="color: red;">{{ $message }}</p> @enderror
            </div>

            <br>

            <div>
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                @error('email') <p style="color: red;">{{ $message }}</p> @enderror
            </div>

            <br>

            <div>
                <label for="password">Password (min 8 chars):</label>
                <input type="password" name="password" id="password" required>
                @error('password') <p style="color: red;">{{ $message }}</p> @enderror
            </div>

            <br>

            <div>
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>

            <br>

            <button type="submit">Register</button>
        </form>

        <p style="margin-top: 20px;">
            Already have an account? <a href="{{ route('login') }}">Login here</a>
        </p>
    </div>

</body>
</html>