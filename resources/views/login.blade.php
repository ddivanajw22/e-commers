@extends('templates.main')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white rounded-[40px] shadow-2xl flex flex-col md:flex-row overflow-hidden max-w-4xl w-full">
        
        <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
            
            <h1 class="text-3xl font-genos font-[900] mb-5 text-center tracking-tight">
                Ravenelle
            </h1>
            
            <div class="flex border border-black rounded-full w-fit mb-8 overflow-hidden mx-auto">
                <button class="bg-black text-white px-5 py-1 text-sm font-semibold">Login</button>
                <button class="bg-white text-black px-5 py-1 text-sm font-semibold">Register</button>
            </div>

            <form action="" method="POST" class="space-y-4 max-w-[300px] mx-auto w-full">
                <div class="relative">
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <i class="fa-regular fa-user"></i>
                    </span>
                    <input type="email" name="email" placeholder="Email" 
                        class="w-full pl-10 pr-4 py-2 border border-black rounded-full focus:outline-none">
                </div>

                <div class="relative">
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <i class="fa-solid fa-lock"></i>
                    </span>
                    <input type="password" name="password" placeholder="Password" 
                        class="w-full pl-10 pr-10 py-2 border border-black rounded-full focus:outline-none">
                </div>

                <div class="flex justify-between items-center text-[10px] text-gray-400 px-2">
                    <label class="flex items-center space-x-1">
                        <input type="checkbox" name="remember" class="rounded">
                        <span>Remember me</span>
                    </label>
                    <a href="#" class="hover:underline">Forgot Password?</a>
                </div>

                <button type="submit" class="w-full bg-black text-white py-2 rounded-full font-bold hover:bg-gray-800 transition">
                    Login
                </button>
            </form>

            <div class="flex items-center my-6 max-w-[300px] mx-auto w-full">
                <div class="flex-grow border-t border-gray-200"></div>
                <span class="px-3 text-gray-400 text-xs">or</span>
                <div class="flex-grow border-t border-gray-200"></div>
            </div>

            <div class="text-center">
                <p class="text-[10px] font-bold mb-4 text-gray-500 uppercase tracking-widest">Login With</p>
                <div class="flex justify-center space-x-4">
                    <button class="w-10 h-10 border border-black rounded-full flex items-center justify-center font-bold">G</button>
                    <button class="w-10 h-10 border border-black rounded-full flex items-center justify-center">
                        <i class="fa-brands fa-facebook-f"></i>
                    </button>
                </div>
            </div>
        </div> <div class="hidden md:block md:w-1/1 relative bg-gray-200">
            <img src="login_register_foto.jpg" 
                alt="Profile" class="w-full h-full object-cover grayscale">
            <div class="absolute inset-0 bg-black/5"></div>
        </div>

    </div>
@endsection