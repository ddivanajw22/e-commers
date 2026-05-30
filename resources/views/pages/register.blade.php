<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ravenelle - Register</title>
    
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

    <div class="bg-white rounded-[40px] shadow-2xl flex flex-col md:flex-row overflow-hidden max-w-4xl w-full">
        
        <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
            
            <h1 class="text-3xl font-genos font-[900] mb-5 text-center tracking-tight">
                Ravenelle
            </h1>

            <div class="flex border border-black rounded-full w-fit overflow-hidden mx-auto mb-6">
                <a href="{{ route('login') }}" class="bg-white text-black px-5 py-1 text-sm font-semibold flex items-center justify-center">Login</a>
                <button class="bg-black text-white px-6 py-1 text-sm font-semibold">Register</button>
            </div>

            <form action="{{ route('register.perform') }}" method="POST" class="space-y-4 max-w-[300px] mx-auto w-full">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name:</label>
                    <div class="relative"> 
                        <span class="absolute top-1/2 left-4 -translate-y-1/2 text-gray-400 pointer-events-none text-lg">
                            <i class="fa-regular fa-user"></i>
                        </span>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required
                            class="w-full pl-10 pr-4 py-2 border border-black rounded-full focus:outline-none"
                            placeholder="Masukkan nama lengkap Anda">
                    </div>
                    @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address:</label>
                    <div class="relative">
                        <span class="absolute top-1/2 left-4 -translate-y-1/2 text-gray-400 pointer-events-none text-lg">
                            <i class="fa-regular fa-envelope"></i>
                        </span>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required
                            class="w-full pl-10 pr-10 py-2 border border-black rounded-full focus:outline-none"
                            placeholder="Masukkan email Anda">
                    </div>
                    @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password (min 8 chars):</label>
                    <div class="relative">
                        <span class="absolute top-1/2 left-4 -translate-y-1/2 text-gray-400 pointer-events-none text-lg">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" name="password" id="password" required
                            class="w-full pl-10 pr-10 py-2 border border-black rounded-full focus:outline-none"
                            placeholder="Masukkan kata sandi Anda">
                    </div>
                    @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password:</label>
                    <div class="relative">
                        <span class="absolute top-1/2 left-4 -translate-y-1/2 text-gray-400 pointer-events-none text-lg">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" name="password_confirmation" id="password_confirmation" required
                            class="w-full pl-10 pr-10 py-2 border border-black rounded-full focus:outline-none"
                            placeholder="Konfirmasi kata sandi Anda">
                    </div>
                </div>

                <button type="submit" class="w-full bg-black text-white py-2 rounded-full font-bold hover:bg-gray-800 transition mt-2">Register</button>
            </form>

            <p class="text-center text-sm mt-4">
                Already have an account? <a href="{{ route('login') }}" class="text-blue-600 font-semibold hover:text-blue-800 hover:underline">Login here</a>
            </p>
            
        </div> 
        
        <div class="w-full md:w-1/2 flex justify-center items-center bg-gray-50">
            <img src="{{ asset('assets/login.jpg') }}" alt="Profile" class="w-full h-full object-cover">
        </div>

    </div>

</body>
</html>