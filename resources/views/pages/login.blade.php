<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ravenelle - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Genos:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
<body>

        <div class="bg-white rounded-[40px] shadow-2xl flex flex-col md:flex-row overflow-hidden max-w-4xl w-full">
        
        <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
            
            <h1 class="text-3xl font-genos font-[900] mb-5 text-center tracking-tight">
                Ravenelle
            </h1>

        <div class="flex border border-black rounded-full w-fit mb-8 overflow-hidden mx-auto">
                        <button class="bg-white text-black px-5 py-1 text-sm font-semibold">Login</button>
                            <link href="Register.blade.php" class="Login" rel="stylesheet">
                        <button class="bg-black text-white px-5 py-1 text-sm font-semibold">Register</button>
                    </div>

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