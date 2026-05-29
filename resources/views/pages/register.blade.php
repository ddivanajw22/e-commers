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

        <form action="{{ route('register.perform') }}" method="POST" class="space-y-4 max-w-[300px] mx-auto w-full">
            @csrf

            <div>
                <div class="relative">
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <i class="fa-regular fa-user"></i>
                    </span>
                <label for="name">Full Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                    class="w-full pl-10 pr-4 py-2 border border-black rounded-full focus:outline-none"
                @error('name') <p style="color: red;">{{ $message }}</p> @enderror
            </div>

            <br>

            <div>
                <div class="relative">
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <i class="fa-regular fa-envelope"></i>
                    </span>
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                    class="w-full pl-10 pr-10 py-2 border border-black rounded-full focus:outline-none">
                @error('email') <p style="color: red;">{{ $message }}</p> @enderror
            </div>

            <br>

            <div>
                <div class="relative">
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <i class="fa-solid fa-lock"></i>
                    </span>
                <label for="password">Password (min 8 chars):</label>
                <input type="password" name="password" id="password" required>
                    class="w-full pl-10 pr-10 py-2 border border-black rounded-full focus:outline-none">
                @error('password') <p style="color: red;">{{ $message }}</p> @enderror
            </div>

            <br>

            <div>
                <div class="relative">
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <i class="fa-solid fa-lock"></i>
                    </span>
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
                    class="w-full pl-10 pr-10 py-2 border border-black rounded-full focus:outline-none">
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