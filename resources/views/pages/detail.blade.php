@extends('layouts.app')

@section('content')
<div class="px-[8%] flex gap-12 pt-10">
    <aside class="w-52 flex-shrink-0 font-42dot">
        <h3 class="font-bold text-base mb-5">Category</h3>
        <ul class="text-[13px] space-y-4 text-gray-500">
            <li class="hover:text-black cursor-pointer">All Product</li>
            
            <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                <span class="w-4 border-b border-gray-300"></span>
                <span class="hover:text-black cursor-pointer">Tops</span>
            </li>
            
            <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                <span class="w-4 border-b border-gray-300"></span> 
                <span class="hover:text-black cursor-pointer">Bottoms</span>
            </li>
            
            <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                <span class="w-4 border-b-2 border-black"></span> 
                <span class="font-bold text-black border-b-2 border-black">Dresses</span>
            </li>

            <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                <span class="w-4 border-b border-gray-300"></span> 
                <span class="hover:text-black cursor-pointer">Outerwear</span>
            </li>

            <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                <span class="w-4 border-b border-gray-300"></span> 
                <span class="hover:text-black cursor-pointer">Activewear</span>
            </li>
        </ul>

        <ul class="mt-10 text-[13px] space-y-4 text-gray-500 border-t pt-8">
            <li class="hover:text-black cursor-pointer">New Arrival</li>
            <li class="hover:text-black cursor-pointer">Best Seller</li>
            <li class="hover:text-black cursor-pointer">On Discount</li>
        </ul>
    </aside>

    <main class="flex-1 pb-20">
        <div class="flex justify-end mb-10">
            <div class="relative w-72">
                <span class="absolute left-4 top-2.5 text-gray-400">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <circle cx="11" cy="11" r="8"/>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                    </svg>
                </span>
                <input type="text" placeholder="Search" class="w-full bg-[#F3F4F6] border border-gray-200 rounded-full pl-12 pr-5 py-2.5 text-sm outline-none">
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <div class="lg:col-span-6 relative bg-[#F9FAFB] border border-gray-100 aspect-[3/4] rounded-[30px] overflow-hidden flex items-center justify-center group shadow-sm">
                <img id="mainProductImage" src="https://i.pinimg.com/1200x/6e/c3/32/6ec33234b443600fa17b027a1ff66667.jpg" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-102">
                
                <button class="absolute left-4 bg-white/80 hover:bg-white text-black font-bold text-lg w-9 h-9 rounded-full flex items-center justify-center shadow-sm transition">
                    &lt;
                </button>
                <button class="absolute right-4 bg-white/80 hover:bg-white text-black font-bold text-lg w-9 h-9 rounded-full flex items-center justify-center shadow-sm transition">
                    &gt;
                </button>

                <div class="absolute bottom-6 flex gap-2 z-10">
                    <span class="w-2 h-2 rounded-full bg-black"></span>
                    <span class="w-2 h-2 rounded-full bg-white border border-gray-300"></span>
                    <span class="w-2 h-2 rounded-full bg-white border border-gray-300"></span>
                </div>
            </div>

            <div class="lg:col-span-6 pl-4 pt-2 space-y-6">
                <div class="flex justify-between items-start gap-4">
                    <h1 class="text-2xl font-bold tracking-tight text-black leading-tight">Elegant Deep Teal Ruched<br>Bodycon Maxi Dress</h1>
                    <button class="p-1 text-gray-400 hover:text-red-500 transition-colors">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                        </svg>
                    </button>
                </div>

                <div class="flex items-center gap-1.5 text-xs font-semibold text-gray-700">
                    <span class="text-black">☆</span> <span>4.8</span> <span class="text-gray-400 font-normal">(26 Reviews)</span>
                </div>

                <div class="text-3xl font-black tracking-tight text-black">$55.00</div>

                <hr class="border-gray-100">

                <div class="space-y-3">
                    <span class="text-xs font-bold uppercase tracking-wider text-gray-400">Color</span>
                    <div class="flex flex-wrap items-center gap-3">
                        <button class="color-btn w-8 h-8 rounded-full border-2 border-black flex items-center justify-center p-[2px] transition-all" title="Deep Teal" data-image="https://i.pinimg.com/1200x/6e/c3/32/6ec33234b443600fa17b027a1ff66667.jpg">
                            <span class="w-full h-full rounded-full bg-[#144A56]"></span>
                        </button>

                        <button class="color-btn w-8 h-8 rounded-full border border-gray-200 hover:border-gray-400 flex items-center justify-center p-[2px] transition-all" title="Maroon" data-image="https://i.pinimg.com/1200x/1e/83/94/1e839446d7f2da0c7bc64e2fc5230ff4.jpg">
                            <span class="w-full h-full rounded-full bg-[#6A1B29]"></span>
                        </button>
                        
                        <button class="color-btn w-8 h-8 rounded-full border border-gray-200 hover:border-gray-400 flex items-center justify-center p-[2px] transition-all" title="Brick Red" data-image="https://i.pinimg.com/1200x/1a/0b/cc/1a0bccbc24bf8356976f82725faee8db.jpg">
                            <span class="w-full h-full rounded-full bg-[#A65B47]"></span>
                        </button>

                        <button class="color-btn w-8 h-8 rounded-full border border-gray-200 hover:border-gray-400 flex items-center justify-center p-[2px] transition-all" title="Mahogany" data-image="https://i.pinimg.com/1200x/bc/df/31/bcdf3183560f4eb7a7e127606fcb99f2.jpg">
                            <span class="w-full h-full rounded-full bg-[#4A2821]"></span>
                        </button>

                        <button class="color-btn w-8 h-8 rounded-full border border-gray-200 hover:border-gray-400 flex items-center justify-center p-[2px] transition-all" title="Antique Orchid" data-image="https://i.pinimg.com/1200x/71/1c/cf/711ccf93b5cd70eb1f1035eb5e523f26.jpg">
                            <span class="w-full h-full rounded-full bg-[#6C4F63]"></span>
                        </button>

                        <button class="color-btn w-8 h-8 rounded-full border border-gray-200 hover:border-gray-400 flex items-center justify-center p-[2px] transition-all" title="Almond Milk" data-image="https://i.pinimg.com/1200x/09/a4/09/09a40994a3770bf67b8d8442cf288d01.jpg">
                            <span class="w-full h-full rounded-full bg-[#F4F1EA] border border-gray-100"></span>
                        </button>
                    </div>
                </div>

                <div class="space-y-3 pt-2">
                    <span class="text-xs font-bold uppercase tracking-wider text-gray-400">Size</span>
                    <div class="flex flex-wrap gap-2">
                        <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center text-xs font-bold hover:border-black transition-colors">XS</button>
                        <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center text-xs font-bold hover:border-black transition-colors">S</button>
                        <button class="w-10 h-10 rounded-xl border-2 border-black bg-black text-white flex items-center justify-center text-xs font-bold transition-colors">M</button>
                        <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center text-xs font-bold hover:border-black transition-colors">L</button>
                        <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center text-xs font-bold hover:border-black transition-colors">XL</button>
                    </div>
                </div>

                <div class="flex gap-3 pt-6">
                    <button class="flex-1 border border-black text-black rounded-full py-3 text-xs font-bold hover:bg-black hover:text-white transition-all duration-200">Add to Cart</button>
                    <button class="flex-1 bg-black text-white rounded-full py-3 text-xs font-bold hover:bg-gray-800 transition-all duration-200">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="mt-16 max-w-4xl">
            <h3 class="text-xl font-bold mb-4">Description</h3>
            
            <div class="bg-[#F9FAFB] border border-gray-100 rounded-[30px] p-8 space-y-4 text-[13px] text-gray-600 font-medium leading-relaxed shadow-sm">
                <p class="text-black font-semibold text-sm">A study in modern drapery and timeless allure.</p>
                
                <p>
                    Crafted from a premium, high-shine satin blend that mimics the liquid fluidity of pure silk, this maxi dress is designed to capture light and movement with every step. The sophisticated ruched detailing cascades elegantly across the bodice, meticulously tailored to cinch the waist and celebrate the natural contours of the silhouette.
                </p>

                <p>
                    Featuring minimalist, ultra-fine shoulder straps that lead to a striking open-back design, it transitions into a subtle, fluid mermaid hem. A captivating piece that seamlessly balances contemporary structural artistry with classic evening elegance.
                </p>

                <div class="pt-2">
                    <button id="toggleSizeGuideBtn" class="flex items-center gap-2 text-black font-bold text-xs uppercase tracking-wider hover:opacity-70 transition-all focus:outline-none">
                        <span>Size Guide & Fabric Details</span>
                        <svg id="accordionArrow" class="w-3 h-3 transform transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                </div>

                <div id="accordionContent" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out opacity-0 space-y-5">
                    
                    <div class="pt-4 border-t border-gray-200/60 space-y-3">
                        <p class="text-black font-bold text-xs uppercase tracking-wider text-gray-400">Size Measurement (cm):</p>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-xs border-collapse">
                                <thead>
                                    <tr class="border-b border-gray-200 text-black font-bold">
                                        <th class="pb-2 pr-4">Size</th>
                                        <th class="pb-2 px-4">Bust (Lingkar Dada)</th>
                                        <th class="pb-2 px-4">Waist (Lingkar Pinggang)</th>
                                        <th class="pb-2 px-4">Hips (Lingkar Pinggul)</th>
                                        <th class="pb-2 pl-4">Length (Panjang Dress)</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-500 divide-y divide-gray-100">
                                    <tr>
                                        <td class="py-2.5 font-bold text-black pr-4">XS</td>
                                        <td class="py-2.5 px-4">78 - 82</td>
                                        <td class="py-2.5 px-4">60 - 64</td>
                                        <td class="py-2.5 px-4">86 - 90</td>
                                        <td class="py-2.5 pl-4">140</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2.5 font-bold text-black pr-4">S</td>
                                        <td class="py-2.5 px-4">83 - 87</td>
                                        <td class="py-2.5 px-4">65 - 69</td>
                                        <td class="py-2.5 px-4">91 - 95</td>
                                        <td class="py-2.5 pl-4">142</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2.5 font-bold text-black pr-4">M</td>
                                        <td class="py-2.5 px-4">88 - 92</td>
                                        <td class="py-2.5 px-4">70 - 74</td>
                                        <td class="py-2.5 px-4">96 - 100</td>
                                        <td class="py-2.5 pl-4">144</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2.5 font-bold text-black pr-4">L</td>
                                        <td class="py-2.5 px-4">93 - 97</td>
                                        <td class="py-2.5 px-4">75 - 79</td>
                                        <td class="py-2.5 px-4">101 - 105</td>
                                        <td class="py-2.5 pl-4">145</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2.5 font-bold text-black pr-4">XL</td>
                                        <td class="py-2.5 px-4">98 - 102</td>
                                        <td class="py-2.5 px-4">80 - 84</td>
                                        <td class="py-2.5 px-4">106 - 110</td>
                                        <td class="py-2.5 pl-4">145</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-[11px] text-gray-400 italic pt-1">*Stretch tolerance up to 2-3 cm due to the elastane blend.</p>
                    </div>

                    <div class="pt-4 space-y-1 text-xs border-t border-gray-200/60">
                        <p><span class="text-black font-bold">Composition:</span> 95% Premium Silk-Satin Blend, 5% Elastane</p>
                        <p><span class="text-black font-bold">Care:</span> Dry clean only / Hand wash cold</p>
                        <p><span class="text-black font-bold">Fit:</span> Sculpted body-skimming fit with a fluid mermaid silhouette</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-16 space-y-8 max-w-4xl">
            <div class="flex items-center justify-between border-b border-gray-100 pb-4">
                <h3 class="text-xl font-bold text-black">Customer Reviews</h3>
                <span class="text-xs font-semibold text-gray-400">Showing <span id="currentReviewCount">3</span> of 26 reviews</span>
            </div>

            <div id="reviewsContainer" class="space-y-6">
                <div class="review-item space-y-3 border-b border-gray-50 pb-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 font-bold text-xs">AN</div>
                            <div>
                                <span class="font-bold text-sm text-black block leading-none">Andini N.</span>
                                <span class="text-[10px] text-gray-400">Verified Buyer — 2 days ago</span>
                            </div>
                        </div>
                        <div class="text-xs text-black">★★★★★</div>
                    </div>
                    <div class="flex items-start gap-6 pt-1">
                        <div class="w-24 aspect-[3/4] bg-gray-100 rounded-xl flex-shrink-0 flex items-center justify-center border border-gray-200/60 overflow-hidden">
                            <span class="text-[10px] text-gray-400 font-medium">No Image</span>
                        </div>
                        <div class="space-y-1 pt-0.5">
                            <p class="text-xs font-bold text-gray-800">Bahannya beneran premium!</p>
                            <p class="text-xs text-gray-600 font-medium leading-relaxed">
                                Awalnya ragu warnanya bakal norak, pas dateng ternyata deep teal-nya mewah bangettt!! Bahannya satin silk yang jatuh, ga kaku, pas di badan nge-cinch pinggang banget jadi keliatan ramping. Definisii ada harga ada rupa sih ini. Beruntung banget dapet size M pas.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="review-item space-y-3 border-b border-gray-50 pb-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 font-bold text-xs">CR</div>
                            <div>
                                <span class="font-bold text-sm text-black block leading-none">Clarissa R.</span>
                                <span class="text-[10px] text-gray-400">Verified Buyer — 1 week ago</span>
                            </div>
                        </div>
                        <div class="text-xs text-black">★★★★★</div>
                    </div>
                    <div class="flex items-start gap-6 pt-1">
                        <div class="w-24 aspect-[3/4] bg-gray-100 rounded-xl flex-shrink-0 flex items-center justify-center border border-gray-200/60 overflow-hidden">
                            <span class="text-[10px] text-gray-400 font-medium">No Image</span>
                        </div>
                        <div class="space-y-1 pt-0.5">
                            <p class="text-xs font-bold text-gray-800">Cocok buat gala dinner ✨</p>
                            <p class="text-xs text-gray-600 font-medium leading-relaxed">
                                Beli ini buat dipake ke acara formal kantor minggu depan. Pengiriman cepet banget semalem pesen besok siangnya udh sampe rumah. Pas dicoba cuttingan mermaid di bagian bawahnya anggun banget pas jalan. Jahitan super rapi ga ada benang sisa. Thank you seller!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="review-item space-y-3 border-b border-gray-50 pb-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 font-bold text-xs">SW</div>
                            <div>
                                <span class="font-bold text-sm text-black block leading-none">Siti W.</span>
                                <span class="text-[10px] text-gray-400">Verified Buyer — 2 weeks ago</span>
                            </div>
                        </div>
                        <div class="text-xs text-black">★★★★★</div>
                    </div>
                    <div class="flex items-start gap-6 pt-1">
                        <div class="w-24 aspect-[3/4] bg-gray-50 rounded-xl flex-shrink-0 flex items-center justify-center border border-dashed border-gray-200">
                            <span class="text-[9px] text-gray-300 italic">No Photo</span>
                        </div>
                        <div class="space-y-1 pt-0.5">
                            <p class="text-xs font-bold text-gray-800">Cantik, ga menerawang</p>
                            <p class="text-xs text-gray-600 font-medium leading-relaxed">
                                Bahan satinnya tebel tapi adem dingin gitu pas kena kulit, ga menerawang sama sekali ya guys jd aman ga perlu furing tambahan lagi. Bagian open back-nya ngasih kesan sexy tp tetep elegant dan ga berlebihan. Next mau order yang warna Maroon-nya!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="review-item hidden space-y-3 border-b border-gray-50 pb-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 font-bold text-xs">KA</div>
                            <div>
                                <span class="font-bold text-sm text-black block leading-none">Karin A.</span>
                                <span class="text-[10px] text-gray-400">Verified Buyer — 3 weeks ago</span>
                            </div>
                        </div>
                        <div class="text-xs text-black">★★★★☆</div>
                    </div>
                    <div class="flex items-start gap-6 pt-1">
                        <div class="w-24 aspect-[3/4] bg-gray-100 rounded-xl flex-shrink-0 flex items-center justify-center border border-gray-200/60 overflow-hidden">
                            <span class="text-[10px] text-gray-400 font-medium">No Image</span>
                        </div>
                        <div class="space-y-1 pt-0.5">
                            <p class="text-xs font-bold text-gray-800">Sedikit kepanjangan tapi memuaskan</p>
                            <p class="text-xs text-gray-600 font-medium leading-relaxed">
                                TB aku 158 cm pas pake size S ini agak kepanjangan dikit bawahnya jadi kudu pake heels yang lumayan tinggi biar ga seret di lantai. Tapi kalau urusan bahan ama cuttingan bener-bener juara, pas bgt di badan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="review-item hidden space-y-3 border-b border-gray-50 pb-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 font-bold text-xs">ME</div>
                            <div>
                                <span class="font-bold text-sm text-black block leading-none">Mega E.</span>
                                <span class="text-[10px] text-gray-400">Verified Buyer — 1 month ago</span>
                            </div>
                        </div>
                        <div class="text-xs text-black">★★★★★</div>
                    </div>
                    <div class="flex items-start gap-6 pt-1">
                        <div class="w-24 aspect-[3/4] bg-gray-100 rounded-xl flex-shrink-0 flex items-center justify-center border border-gray-200/60 overflow-hidden">
                            <span class="text-[10px] text-gray-400 font-medium">No Image</span>
                        </div>
                        <div class="space-y-1 pt-0.5">
                            <p class="text-xs font-bold text-gray-800">Warna Almond Milk-nya clean bgt!</p>
                            <p class="text-xs text-gray-600 font-medium leading-relaxed">
                                PO yang warna Almond Milk buat pre-wedding kemarin, beneran keliatan bersih dan anggun banget pas difoto. Kilau satinnya pas ga berlebihan keliatan mahal banget.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="review-item hidden space-y-3 pb-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 font-bold text-xs">DL</div>
                            <div>
                                <span class="font-bold text-sm text-black block leading-none">Dina L.</span>
                                <span class="text-[10px] text-gray-400">Verified Buyer — 1 month ago</span>
                            </div>
                        </div>
                        <div class="text-xs text-black">★★★★★</div>
                    </div>
                    <div class="flex items-start gap-6 pt-1">
                        <div class="w-24 aspect-[3/4] bg-gray-50 rounded-xl flex-shrink-0 flex items-center justify-center border border-dashed border-gray-200">
                            <span class="text-[9px] text-gray-300 italic">No Photo</span>
                        </div>
                        <div class="space-y-1 pt-0.5">
                            <p class="text-xs font-bold text-gray-800">Sangat worth it</p>
                            <p class="text-xs text-gray-600 font-medium leading-relaxed">
                                Udah langganan beli baju di sini dan gapernah ngecewain. Ruched detailing-nya rapi bgt bikin ilusi badan jd makin berbentuk jam pasir. Luvv!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-2 flex justify-center">
                <button id="loadMoreReviewsBtn" class="font-bold text-black border border-black/10 rounded-full px-6 py-2 text-xs hover:bg-black hover:text-white transition-all shadow-sm focus:outline-none">
                    Read More Reviews
                </button>
            </div>
        </div>

        <div class="mt-20 border-t pt-12 relative">
            <h3 class="text-2xl font-black italic font-genos tracking-tight mb-8">Related</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pr-12">
                <div class="flex flex-col">
                    <div class="relative bg-[#EAEAEA] aspect-[4/3.2] rounded-[30px] mb-4 overflow-hidden">
                        <button class="absolute top-4 right-4 text-black">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </button>
                    </div>
                    <h4 class="text-xs font-bold text-black">Produk</h4>
                    <div class="flex justify-between items-center mt-1">
                        <span class="text-[9px] text-gray-400 italic">★ 0.0 (0k Reviews)</span>
                        <span class="font-bold text-xs">$40.00</span>
                    </div>
                    <div class="flex gap-2 mt-3">
                        <button class="flex-1 border border-black rounded-full py-2 text-[9px] font-bold hover:bg-black hover:text-white transition-all">Add to cart</button>
                        <button class="flex-1 bg-black text-white rounded-full py-2 text-[9px] font-bold hover:bg-gray-800 transition-all">Buy now</button>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="relative bg-[#EAEAEA] aspect-[4/3.2] rounded-[30px] mb-4 overflow-hidden">
                        <button class="absolute top-4 right-4 text-black">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </button>
                    </div>
                    <h4 class="text-xs font-bold text-black">Produk</h4>
                    <div class="flex justify-between items-center mt-1">
                        <span class="text-[9px] text-gray-400 italic">★ 0.0 (0k Reviews)</span>
                        <span class="font-bold text-xs">$40.00</span>
                    </div>
                    <div class="flex gap-2 mt-3">
                        <button class="flex-1 border border-black rounded-full py-2 text-[9px] font-bold hover:bg-black hover:text-white transition-all">Add to cart</button>
                        <button class="flex-1 bg-black text-white rounded-full py-2 text-[9px] font-bold hover:bg-gray-800 transition-all">Buy now</button>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="relative bg-[#EAEAEA] aspect-[4/3.2] rounded-[30px] mb-4 overflow-hidden">
                        <button class="absolute top-4 right-4 text-black">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </button>
                    </div>
                    <h4 class="text-xs font-bold text-black">Produk</h4>
                    <div class="flex justify-between items-center mt-1">
                        <span class="text-[9px] text-gray-400 italic">★ 0.0 (0k Reviews)</span>
                        <span class="font-bold text-xs">$40.00</span>
                    </div>
                    <div class="flex gap-2 mt-3">
                        <button class="flex-1 border border-black rounded-full py-2 text-[9px] font-bold hover:bg-black hover:text-white transition-all">Add to cart</button>
                        <button class="flex-1 bg-black text-white rounded-full py-2 text-[9px] font-bold hover:bg-gray-800 transition-all">Buy now</button>
                    </div>
                </div>
            </div>

            <button class="absolute right-0 top-1/2 transform -translate-y-1/2 w-10 h-10 rounded-full border border-black flex items-center justify-center hover:bg-black hover:text-white transition-colors duration-200">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </button>
        </div>
    </main>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
   
        const toggleBtn = document.getElementById('toggleSizeGuideBtn');
        const content = document.getElementById('accordionContent');
        const arrow = document.getElementById('accordionArrow');

        toggleBtn.addEventListener('click', function () {
            if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                content.style.maxHeight = '0px';
                content.style.opacity = '0';
                arrow.classList.remove('rotate-180');
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                content.style.opacity = '1';
                arrow.classList.add('rotate-180');
            }
        });

        const colorButtons = document.querySelectorAll('.color-btn');
        const mainImage = document.getElementById('mainProductImage');

        colorButtons.forEach(button => {
            button.addEventListener('click', function () {
                const newImageUrl = this.getAttribute('data-image');
                if (!newImageUrl) return;

                mainImage.src = newImageUrl;

                colorButtons.forEach(btn => {
                    btn.classList.remove('border-2', 'border-black');
                    btn.classList.add('border', 'border-gray-200');
                });

                this.classList.remove('border', 'border-gray-200');
                this.classList.add('border-2', 'border-black');
            });
        });

    
        const loadMoreBtn = document.getElementById('loadMoreReviewsBtn');
        const currentCountSpan = document.getElementById('currentReviewCount');
        const reviewsContainer = document.getElementById('reviewsContainer');
        
        let totalReviewsCount = 26; 
        let visibleItemsCount = 3;  
        const itemsPerLoad = 3;     

       
        const dummyNames = ["Rania K.", "Putri UT.", "Fadhilah S.", "Nabila Z.", "Zahra A.", "Dhea M.", "Tiara R.", "Laras W."];
        const dummyTitles = ["Bagus banget potongannya", "Sesuai ekspektasi", "Satinnya juara!", "Next bakal beli warna lain", "Sangat puas belanja di sini"];
        const dummyTexts = [
            "Gak nyesel beli di sini, cuttingannya pas banget di badan dan bikin keliatan anggun.",
            "Bahannya adem, jatuh, dan mewah banget pas kena cahaya lampu formal.",
            "Adminnya ramah dan pengirimannya super cepat. Produknya ga mengecewakan sama sekali.",
            "Kualitas jahitannya rapi banget, ga ada benang sisa. Ukurannya juga pas sesuai deskripsi.",
            "Sukaaa bgt sama siluetnya! Bikin badan keliatan lebih jenjang dan ramping."
        ];

        loadMoreBtn.addEventListener('click', function () {
           
            let remaining = totalReviewsCount - visibleItemsCount;
            let toRender = Math.min(itemsPerLoad, remaining);

           
            const staticHiddenItems = document.querySelectorAll('#reviewsContainer .review-item.hidden');
            
            if (staticHiddenItems.length > 0) {
       
                for (let i = 0; i < Math.min(toRender, staticHiddenItems.length); i++) {
                    staticHiddenItems[i].classList.remove('hidden');
                }
            } else {
                
                for (let i = 0; i < toRender; i++) {
                    
                    const randomName = dummyNames[Math.floor(Math.random() * dummyNames.length)];
                    const randomTitle = dummyTitles[Math.floor(Math.random() * dummyTitles.length)];
                    const randomText = dummyTexts[Math.floor(Math.random() * dummyTexts.length)];
                    const randomTime = (visibleItemsCount + i) + " days ago";

                   
                    const reviewHtml = `
                        <div class="review-item space-y-3 border-b border-gray-50 pb-6 opacity-0 transition-opacity duration-500" style="opacity: 1;">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 font-bold text-xs">
                                        ${randomName.substring(0,2)}
                                    </div>
                                    <div>
                                        <span class="font-bold text-sm text-black block leading-none">${randomName}</span>
                                        <span class="text-[10px] text-gray-400">Verified Buyer — ${randomTime}</span>
                                    </div>
                                </div>
                                <div class="text-xs text-black">★★★★★</div>
                            </div>
                            <div class="flex items-start gap-6 pt-1">
                                <div class="w-24 aspect-[3/4] bg-gray-50 rounded-xl flex-shrink-0 flex items-center justify-center border border-dashed border-gray-200">
                                    <span class="text-[9px] text-gray-300 italic">No Photo</span>
                                </div>
                                <div class="space-y-1 pt-0.5">
                                    <p class="text-xs font-bold text-gray-800">${randomTitle}</p>
                                    <p class="text-xs text-gray-600 font-medium leading-relaxed">${randomText}</p>
                                </div>
                            </div>
                        </div>
                    `;
                    
                    reviewsContainer.insertAdjacentHTML('beforeend', reviewHtml);
                }
            }

            
            visibleItemsCount += toRender;
            currentCountSpan.textContent = visibleItemsCount;

          
            if (visibleItemsCount >= totalReviewsCount) {
                loadMoreBtn.style.display = 'none';
            }
        });
    });
</script>
@endsection