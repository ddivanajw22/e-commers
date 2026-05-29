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
                        <button class="bg-black text-white px-5 py-1 text-sm font-semibold">Login</button>
                        <button class="bg-white text-black px-5 py-1 text-sm font-semibold">Register</button>
                    </div>

        <form action="{{ route('login.perform') }}" method="POST" class="space-y-4 max-w-[300px] mx-auto w-full">
            @csrf 
            <div>
                <div class="relative">
                <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                    <i class="fa-regular fa-user"></i>
                </span>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                    class="w-full pl-10 pr-4 py-2 border border-black rounded-full focus:outline-none">
                </div>
                @error('email')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <br>

            <div>
                <div class="relative">
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <i class="fa-solid fa-lock"></i>
                    </span>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required
                    class="w-full pl-10 pr-10 py-2 border border-black rounded-full focus:outline-none">
                </div>
                @error('password')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <br>

            <button type="submit" class="w-full bg-black text-white py-2 rounded-full font-bold hover:bg-gray-800 transition">Log In</button>
        </form>

        <div class="hidden md:block md:w-1/1 relative bg-gray-200">
            <img src="" 
                alt="Profile" class="w-full h-full object-cover grayscale">
            <div class="absolute inset-0 bg-black/5"></div>
        </div>

        <p style="margin-top: 20px;">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
    </div>
</body>
</html>