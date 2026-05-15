<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ravenelle - Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Genos:ital,wght@0,700;1,800&family=42dot+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .font-genos { font-family: 'Genos', sans-serif; }
        .font-42dot { font-family: '42dot Sans', sans-serif; }
        .category-line { position: relative; padding-left: 20px; }
        .category-line::before {
            content: ""; position: absolute; left: 7px; top: -10px; bottom: 10px;
            width: 1px; background-color: #d1d5db;
        }
    </style>
</head>
<body class="bg-white text-black font-42dot">

    <nav class="flex justify-between items-center px-[8%] py-7 sticky top-0 bg-white z-50 border-b border-gray-50 shadow-sm">
        <div class="text-3xl font-extrabold italic font-genos tracking-tighter">Ravenelle</div>
        <div class="flex items-center gap-12 text-lg font-bold font-genos">
            <a href="#" class="hover:text-gray-500">Home</a>
            <a href="#" class="bg-[#E5E7EB] px-7 py-1.5 rounded-md text-black">Shop</a>
            <a href="#" class="hover:text-gray-500">Blog</a>
        </div>
        <div class="flex gap-7 items-center">
            <button><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg></button>
            <button><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
            <button>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="12" r="11" stroke="black" stroke-width="2"/>
                    <path d="M12 11.5C13.6569 11.5 15 10.1569 15 8.5C15 6.84315 13.6569 5.5 12 5.5C10.3431 5.5 9 6.84315 9 8.5C9 10.1569 10.3431 11.5 12 11.5Z" fill="black"/>
                    <path d="M6 18.5C6 15.1863 8.68629 12.5 12 12.5C15.3137 12.5 18 15.1863 18 18.5" stroke="black" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
    </nav>

    @yield('content')

    <footer class="px-[8%] pb-12">
        <div class="text-2xl font-extrabold italic font-genos tracking-tighter mb-8">Ravenelle</div>
        <div class="bg-[#E2E2E2] rounded-[45px] px-24 py-20">
            <div class="grid grid-cols-3 gap-20">
                <div>
                    <h5 class="font-bold text-sm mb-6">Our Store</h5>
                    <ul class="text-[12px] text-gray-600 space-y-4">
                        <li>Home</li><li>About</li><li>Service</li><li>Contact</li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-bold text-sm mb-6">Explore</h5>
                    <ul class="text-[12px] text-gray-600 space-y-4">
                        <li>New Arrivals</li><li>Best Sellers</li><li>Size Guide</li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-bold text-sm mb-6">Get In Touch</h5>
                    <ul class="text-[12px] text-gray-600 space-y-5">
                        <li class="flex items-center gap-3">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            UIB
                        </li>
                        <li class="flex items-center gap-3">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            123456789
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>