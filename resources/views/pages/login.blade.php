<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ravenelle - Login</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Genos:wght@900&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        genos: ['Genos', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
<body>

        <div class="bg-white rounded-[40px] shadow-2xl flex flex-col md:flex-row overflow-hidden max-w-4xl w-full">
        
        <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
            
            <h1 class="text-3xl font-genos font-[900] mb-5 text-center tracking-tight">
                Ravenelle
            </h1>

        <div class="flex border border-black rounded-full w-fit overflow-hidden mx-auto">
                        <button class="bg-black text-white px-6 py-1 text-sm font-semibold">Login</button>
                        <button class="bg-white text-black px-5 py-1 text-sm font-semibold">Register</button>
                    </div>

        <form action="{{ route('login.perform') }}" method="POST" class="space-y-3 max-w-[300px] mx-auto w-full">
            @csrf 
            <div>
                <div class="relative"> 
                <span class="absolute top-11 left-4 -translate-y-1/2 text-gray-400 pointer-events-none text-lg">
                    <i class="fa-regular fa-user"></i>
                </span>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                    placeholder="Masukkan email Anda"
                    class="w-full pl-10 pr-4 py-2 border border-black rounded-full focus:outline-none">
                </div>
                @error('email')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <div class="relative"> 
                <span class="absolute top-11 left-4 -translate-y-1/2 text-gray-400 pointer-events-none text-lg">
                    <i class="fa-solid fa-lock"></i>
                </span>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required
                    placeholder="Masukkan Kata sandi Anda"
                    class="w-full pl-10 pr-10 py-2 border border-black rounded-full focus:outline-none">
                </div>
                @error('password')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <br>

            <button type="submit" class="w-full bg-black text-white py-2 rounded-full font-bold hover:bg-gray-800 transition">Log In</button>
        </form>

        <p style="margin-top: 10px; margin-left: 20px;">Don't have an account? <a href="{{ route('register') }}" class="text-blue-600 font-semibold hover:text-blue-800 hover:underline">Register here</a></p>

        </div> <div class="flex justify-center items-center h-full">
            <img src="{{ asset('assets/login.jpg') }}" alt="Profile" class="w-full h-full object-cover">
        </div>
</body>
</html>