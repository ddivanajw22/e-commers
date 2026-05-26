<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class CategoryAndProductSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Kategori dan simpan ID-nya
        $categories = [
            'Tops' => DB::table('categories')->insertGetId(['nama_kategori' => 'Tops', 'created_at' => now(), 'updated_at' => now()]),
            'Bottom' => DB::table('categories')->insertGetId(['nama_kategori' => 'Bottom', 'created_at' => now(), 'updated_at' => now()]),
            'Dresses' => DB::table('categories')->insertGetId(['nama_kategori' => 'Dresses', 'created_at' => now(), 'updated_at' => now()]),
            'Outerwear' => DB::table('categories')->insertGetId(['nama_kategori' => 'Outerwear', 'created_at' => now(), 'updated_at' => now()]),
            'Activewear' => DB::table('categories')->insertGetId(['nama_kategori' => 'Activewear', 'created_at' => now(), 'updated_at' => now()]),
        ];

        $id_seller = 1; // Mengacu pada UserSeeder

        // 2. Data Mentah dari Controller Anda
        $topsData = [
            ['name' => 'Asymmetrical Collar Crop Sweatshirt', 'price' => '$40.00', 'image' => 'https://i.pinimg.com/1200x/0d/f3/07/0df307f04ca36d28eb7dd4eb4ebfcadb.jpg', 'rating' => '5.0 (1.3k Reviews)'],
            ['name' => 'Dark Brown Faux Leather Wrap Shirt', 'price' => '$59.00', 'image' => 'https://i.pinimg.com/1200x/94/3d/68/943d6825adef9ef9015628287212ec06.jpg', 'rating' => '4.8 (850 Reviews)'],
            ['name' => 'Navy Blue Ruched Button-Up Shirt', 'price' => '$48.50', 'image' => 'https://i.pinimg.com/736x/aa/c9/c4/aac9c481cbb53fe78636bea482b7ec23.jpg', 'rating' => '4.7 (1.1k Reviews)'],
            ['name' => 'Sage Green Sleeveless Wrap Top', 'price' => '$48.00', 'image' => 'https://i.pinimg.com/736x/67/38/08/67380873a3e7ae3ce4d5fe1b446730c1.jpg', 'rating' => '4.9 (540 Reviews)'],
            ['name' => 'White Stand Collar Crop Top with Gold Buttons', 'price' => '$45.90', 'image' => 'https://i.pinimg.com/1200x/b3/7d/0e/b37d0eebf1fcc367c67ff2ab8af832ed.jpg', 'rating' => '5.0 (2k Reviews)'],
            ['name' => 'Khaki Ruched Blouse with Gold Brooch', 'price' => '$52.00', 'image' => 'https://i.pinimg.com/736x/1e/98/d3/1e98d3b8df29cc97bead872adfb8245c.jpg', 'rating' => '4.6 (320 Reviews)'],
            ['name' => 'Burgundy Lace-Up Corset Vest', 'price' => '$42.00', 'image' => 'https://i.pinimg.com/736x/85/63/ce/8563cefafd317696002c6badd9431802.jpg', 'rating' => '4.8 (1.5k Reviews)'],
            ['name' => 'Denim Off-Shoulder Two-Piece Look Top', 'price' => '$58.50', 'image' => 'https://i.pinimg.com/1200x/16/82/04/168204f46ac9cb3777e8bcec25710842.jpg', 'rating' => '4.7 (780 Reviews)'],
            ['name' => 'Navy Blue Ruched Cami Top', 'price' => '$45.00', 'image' => 'https://i.pinimg.com/736x/9d/63/d6/9d63d6cf03cbe22742ae3ca186328a6f.jpg', 'rating' => '4.9 (410 Reviews)'],
            ['name' => 'Yellow Off-Shoulder Fuzzy Knit Sweater', 'price' => '$48.00', 'image' => 'https://i.pinimg.com/1200x/46/55/58/46555866dfd03277a9969cacfcbc8f6b.jpg', 'rating' => '5.0 (1.1k Reviews)'],
            ['name' => 'Light Blue Asymmetric Buckle Strap Top', 'price' => '$40.00', 'image' => 'https://i.pinimg.com/1200x/c8/e4/25/c8e425b1dae724269f5c0a4dc7afae87.jpg', 'rating' => '4.7 (630 Reviews)'],
            ['name' => 'Floral Print Flare Sleeve Blouse', 'price' => '$55.00', 'image' => 'https://i.pinimg.com/1200x/d1/fd/1d/d1fd1d025befd9053c81af4d593fe32d.jpg', 'rating' => '4.9 (890 Reviews)'],
            ['name' => 'White Button-Up Shirt with Brown Corset', 'price' => '$44.00', 'image' => 'https://i.pinimg.com/1200x/aa/f9/de/aaf9deb5a01da5e90130be16db82f6f8.jpg', 'rating' => '4.6 (450 Reviews)'],
            ['name' => 'Black Faux Leather Chain Strap Top', 'price' => '$52.00', 'image' => 'https://i.pinimg.com/736x/8a/b1/53/8ab153f0e28ca15185e6045b487aecdd.jpg', 'rating' => '4.8 (1.2k Reviews)'],
            ['name' => 'Light Blue Modern Cheongsam Crop Top', 'price' => '$59.90', 'image' => 'https://i.pinimg.com/1200x/88/06/77/8806774370cd1181ab6f62ea17676571.jpg', 'rating' => '4.7 (310 Reviews)'],
        ];

        $bottomData = [
            ['name' => 'Navy Blue Denim Wrap Mini Skirt', 'price' => '$45.00', 'image' => 'https://i.pinimg.com/1200x/17/3a/94/173a94e217e71827e9dd5b0a79d46de7.jpg', 'rating' => '4.8 (340 Reviews)'],
            ['name' => 'Soft Pink Drawstring Casual Skort', 'price' => '$45.00', 'image' => 'https://i.pinimg.com/1200x/3b/39/dd/3b39dd7215b0816a1ceeb289f00d5f98.jpg', 'rating' => '4.9 (510 Reviews)'],
            ['name' => 'Dark Brown Faux Leather Mini Skirt', 'price' => '$58.00', 'image' => 'https://i.pinimg.com/736x/83/6b/67/836b67ee309ea58b9d0f5be0c7f2f637.jpg', 'rating' => '4.7 (280 Reviews)'],
            ['name' => 'High-Waisted Light Wash Wide-Leg Jeans', 'price' => '$48.50', 'image' => 'https://i.pinimg.com/1200x/fa/7d/b7/fa7db741cf6848f1c657e56af9bd17e2.jpg', 'rating' => '4.6 (190 Reviews)'],
            ['name' => 'Classic Denim Flare Trousers', 'price' => '$52.00', 'image' => 'https://i.pinimg.com/1200x/5d/8d/7f/5d8d7ffcc26b927900801f2c941d513c.jpg', 'rating' => '4.9 (420 Reviews)'],
            ['name' => 'Vintage Denim Maxi Skirt with Star Patchwork', 'price' => '$69.90', 'image' => 'https://i.pinimg.com/736x/1c/f9/8b/1cf98b4c031a4ded24b883ae1ca75965.jpg', 'rating' => '4.8 (150 Reviews)'],
            ['name' => 'Elegant Off-White Tailored Wide-Leg Trousers', 'price' => '$66.00', 'image' => 'https://i.pinimg.com/1200x/3f/cf/ca/3fcfcaff79887de446a577e00198aac6.jpg', 'rating' => '4.7 (210 Reviews)'],
            ['name' => 'Dusty Rose High-Waisted Wide-Leg Pants', 'price' => '$40.00', 'image' => 'https://i.pinimg.com/1200x/10/ee/20/10ee20e6eff7444d141dc1cd312e7132.jpg', 'rating' => '4.8 (310 Reviews)'],
            ['name' => 'Classic Dark Brown Pleated Trousers', 'price' => '$42.00', 'image' => 'https://i.pinimg.com/1200x/5d/35/c4/5d35c46e2929e0390d19afd27401bca5.jpg', 'rating' => '4.9 (670 Reviews)'],
            ['name' => 'White Textured High-Waisted Shorts with Belt', 'price' => '$40.00', 'image' => 'https://i.pinimg.com/736x/1b/d7/93/1bd793fcb43bac9f2fc68ab48b5ed367.jpg', 'rating' => '4.7 (480 Reviews)'],
            ['name' => 'Casual Beige High-Waisted Shorts with Rope Belt', 'price' => '$39.90', 'image' => 'https://i.pinimg.com/736x/91/42/8a/91428a79a13e0c4a45a6e19d78442eb0.jpg', 'rating' => '4.8 (180 Reviews)'],
            ['name' => 'Navy Blue Tiered Ruffle Mini Skirt', 'price' => '$44.00', 'image' => 'https://i.pinimg.com/736x/81/15/c1/8115c106378956fca2dffa0d038af58b.jpg', 'rating' => '4.8 (290 Reviews)'],
            ['name' => 'Elegant Khaki Pleated Midi Long Skirt', 'price' => '$47.50', 'image' => 'https://i.pinimg.com/1200x/2a/45/93/2a4593469e968e4afc0467306f654ac8.jpg', 'rating' => '5.0 (130 Reviews)'],
            ['name' => 'Aesthetic Pink Ruffle Asymmetric Midi Skirt', 'price' => '$44.00', 'image' => 'https://i.pinimg.com/736x/55/c3/75/55c375c0dfc6dc93e7de93fa0b0abbd2.jpg', 'rating' => '4.6 (220 Reviews)'],
            ['name' => 'Burgundy Faux Leather Slit Midi Skirt', 'price' => '$55.90', 'image' => 'https://i.pinimg.com/1200x/17/8c/bf/178cbff6c03e1f956edb0ff952a8838b.jpg', 'rating' => '4.8 (410 Reviews)'],
        ];

        $dressesData = [
            ['name' => 'Elegant Deep Teal Ruched Bodycon Maxi Dress', 'price' => '$55.00', 'image' => 'https://i.pinimg.com/1200x/6e/c3/32/6ec33234b443600fa17b027a1ff66667.jpg', 'rating' => '4.8 (120 Reviews)'],
            ['name' => 'Gothic Glam Black Sweetheart Corset Midi Dress', 'price' => '$62.50', 'image' => 'https://i.pinimg.com/1200x/c2/46/30/c24630af02e71ecda39cb8468f82b218.jpg', 'rating' => '4.9 (230 Reviews)'],
            ['name' => 'Sophisticated Deep Maroon One-Shoulder Draped Dress', 'price' => '$58.00', 'image' => 'https://i.pinimg.com/1200x/1b/60/32/1b60326228446bb64f16eee68e9df61c.jpg', 'rating' => '4.7 (185 Reviews)'],
            ['name' => 'Vintage Dream White Ruched Cottagecore Dress', 'price' => '$59.90', 'image' => 'https://i.pinimg.com/736x/bb/5d/72/bb5d7235866b8e74353b7ee04c14d871.jpg', 'rating' => '4.6 (95 Reviews)'],
            ['name' => 'Retro Monochrome Floral A-Line Dress with Tie-Straps', 'price' => '$60.00', 'image' => 'https://i.pinimg.com/1200x/82/32/a3/8232a33bfd2d41bf79e2adcbd6fc8301.jpg', 'rating' => '4.8 (310 Reviews)'],
            ['name' => 'Classic Sage Green Cap-Sleeve Flare Dress', 'price' => '$56.00', 'image' => 'https://i.pinimg.com/1200x/ca/e7/16/cae71648f2cae1fbc51feea78118f931.jpg', 'rating' => '4.9 (150 Reviews)'],
            ['name' => 'Aesthetic Soft Pink A-Line Mini Dress with Bow Details', 'price' => '$49.90', 'image' => 'https://i.pinimg.com/736x/f9/9d/3e/f99d3ee3a5997ea79c6dc3005d89558e.jpg', 'rating' => '4.7 (210 Reviews)'],
            ['name' => 'Sweet Off-The-Shoulder Cherry Print Mini Dress', 'price' => '$57.00', 'image' => 'https://i.pinimg.com/736x/6e/d7/30/6ed7303d14b8a7feaa2644eb7630b980.jpg', 'rating' => '4.8 (175 Reviews)'],
            ['name' => 'Preppy Blue Plaid Off-The-Shoulder Puff-Sleeve Dress', 'price' => '$55.00', 'image' => 'https://i.pinimg.com/736x/a8/c5/f5/a8c5f57d7cf26fa43dc5324a0023a0d6.jpg', 'rating' => '5.0 (85 Reviews)'],
            ['name' => 'Dark Crimson Double-Breasted Blazer Pleated Dress', 'price' => '$64.00', 'image' => 'https://i.pinimg.com/1200x/db/af/a8/dbafa8678b84aa0d91daeb6f485f3a6c.jpg', 'rating' => '4.9 (420 Reviews)'],
            ['name' => 'Classy Houndstooth Halter Neck A-Line Dress', 'price' => '$57.50', 'image' => 'https://i.pinimg.com/1200x/71/3c/2b/713c2b8fee9d2244b81008e9cfc370fd.jpg', 'rating' => '4.7 (190 Reviews)'],
            ['name' => 'Vintage Soft Pink Long-Sleeve Dress with Tie Collar', 'price' => '$64.00', 'image' => 'https://i.pinimg.com/1200x/7e/a4/7a/7ea47a03659595a3dafa78d75da66195.jpg', 'rating' => '4.8 (130 Reviews)'],
            ['name' => 'Chic Indigo Denim Tiered Ruffle Cami Dress', 'price' => '$54.90', 'image' => 'https://i.pinimg.com/736x/1c/c3/6e/1cc36e9c2a58aa9eb8e6d6ba9a9ffd27.jpg', 'rating' => '4.6 (240 Reviews)'],
            ['name' => 'Classic Camel Collar-Neck Short-Sleeve Flare Dress', 'price' => '$69.00', 'image' => 'https://i.pinimg.com/1200x/94/ef/dd/94efddc8729e04c1788b88a30b13a18d.jpg', 'rating' => '4.9 (165 Reviews)'],
            ['name' => 'Cozy Charcoal Gray Hoodie Dress with Side-Buckle', 'price' => '$65.00', 'image' => 'https://i.pinimg.com/736x/54/a1/d9/54a1d9e4f2859cf7c13ed2c55874428a.jpg', 'rating' => '4.8 (110 Reviews)'],
        ];

        $outerwearData = [
            ['name' => 'Aesthetic Sage Green Zippered Sports Jacket', 'price' => '$45.00', 'image' => 'https://i.pinimg.com/736x/28/98/0e/28980eab28e66fb0239b578c3868eb99.jpg', 'rating' => '4.8 (115 Reviews)'],
            ['name' => 'Minimalist Cream White Athletic Quarter-Zip Pullover', 'price' => '$48.00', 'image' => 'https://i.pinimg.com/1200x/09/a9/ce/09a9ceafe37b9253a4e0dbce0fe8a907.jpg', 'rating' => '4.9 (210 Reviews)'],
            ['name' => 'Classic Off-White Workout Zip-Up Hoodie', 'price' => '$42.50', 'image' => 'https://i.pinimg.com/736x/db/95/00/db95006b010e37036802e8d92877a7f9.jpg', 'rating' => '4.7 (98 Reviews)'],
            ['name' => 'Cozy Charcoal Gray Oversized Sporty Sweatshirt', 'price' => '$39.90', 'image' => 'https://i.pinimg.com/736x/ef/51/54/ef5154b721f2340b5710516b5961d28b.jpg', 'rating' => '4.8 (320 Reviews)'],
            ['name' => 'Premium Oatmeal Beige Knit Training Crewneck', 'price' => '$44.00', 'image' => 'https://i.pinimg.com/1200x/bb/4b/cd/bb4bcde322a50a169b79d2df56c72fd9.jpg', 'rating' => '4.9 (145 Reviews)'],
            ['name' => 'Sporty Jet Black Lightweight Running Jacket', 'price' => '$49.90', 'image' => 'https://i.pinimg.com/1200x/64/db/3b/64db3be1b66b60121046c04174b14e5a.jpg', 'rating' => '4.6 (180 Reviews)'],
            ['name' => 'Elegant Dusty Pink Cropped Activewear Jacket', 'price' => '$38.00', 'image' => 'https://i.pinimg.com/736x/6b/ea/6e/6bea6eeee7d43457f652be711c770064.jpg', 'rating' => '4.8 (240 Reviews)'],
            ['name' => 'Chic Light Gray Cropped Gym Hoodie', 'price' => '$35.00', 'image' => 'https://i.pinimg.com/1200x/68/56/2e/68562e646b88c3aaa2f6d812972d3686.jpg', 'rating' => '4.7 (155 Reviews)'],
            ['name' => 'Urban Slate Gray Fitted Workout Zip-Up', 'price' => '$46.00', 'image' => 'https://i.pinimg.com/736x/11/a6/79/11a679a75d2212c75553f923688e8371.jpg', 'rating' => '4.9 (192 Reviews)'],
            ['name' => 'Trendy Soft Blue Collared Athletic Windbreaker', 'price' => '$52.00', 'image' => 'https://i.pinimg.com/736x/a5/ac/27/a5ac27c729f9b7b32e2cef27fa905c24.jpg', 'rating' => '5.0 (88 Reviews)'],
            ['name' => 'Streetwear Vintage Olive Green Sporty Track Jacket', 'price' => '$55.00', 'image' => 'https://i.pinimg.com/1200x/36/bd/26/36bd26379fa7ee2b4094d34abc2c2212.jpg', 'rating' => '4.8 (137 Reviews)'],
            ['name' => 'Casual Ash Gray Fleece Training Hoodie', 'price' => '$41.00', 'image' => 'https://i.pinimg.com/736x/32/62/7d/32627da469f9fe22bb6869cd5e5dd187.jpg', 'rating' => '4.7 (204 Reviews)'],
            ['name' => 'Retro Navy Blue Varsity Active Pullover', 'price' => '$43.90', 'image' => 'https://i.pinimg.com/736x/e9/10/2c/e9102c1407e9d523b9cd8b4ddc3c2950.jpg', 'rating' => '4.9 (165 Reviews)'],
            ['name' => 'Comfortable Tan Beige Oversized Gym Sweatshirt', 'price' => '$39.00', 'image' => 'https://i.pinimg.com/736x/22/21/b0/2221b0cb32916e575bd4a0b07e4e2322.jpg', 'rating' => '4.8 (290 Reviews)'],
            ['name' => 'Sleek All-Black Performance Gym Jacket', 'price' => '$47.50', 'image' => 'https://i.pinimg.com/736x/17/96/42/1796429189113214458b6204a201e4fa.jpg', 'rating' => '4.9 (412 Reviews)'],
        ];

        $activewearData = [
            ['name' => 'Ribbed Seamless Two-Piece Crop Top & Shorts Set', 'price' => '$65.00', 'image' => 'https://i.pinimg.com/1200x/b4/cb/59/b4cb59360ee9e8f413f832322d791d15.jpg', 'rating' => '4.8 (115 Reviews)'],
            ['name' => 'Athletic Compression Short Sleeve & Biker Shorts Set', 'price' => '$69.00', 'image' => 'https://i.pinimg.com/736x/99/09/60/990960a1339d2ae5375e689cd467cabd.jpg', 'rating' => '4.9 (210 Reviews)'],
            ['name' => 'Sleek Mock-Neck Zip-Up Activewear Jumpsuit', 'price' => '$72.50', 'image' => 'https://i.pinimg.com/736x/db/95/00/db95006b010e37036802e8d92877a7f9.jpg', 'rating' => '4.7 (98 Reviews)'],
            ['name' => 'Aesthetic Racerback Mock-Neck Running Romper', 'price' => '$79.90', 'image' => 'https://i.pinimg.com/736x/ef/51/54/ef5154b721f2340b5710516b5961d28b.jpg', 'rating' => '4.8 (320 Reviews)'],
            ['name' => 'PClassic Neon Lime Green Workout Bodysuit', 'price' => '$70.00', 'image' => 'https://i.pinimg.com/1200x/bb/4b/cd/bb4bcde322a50a169b79d2df56c72fd9.jpg', 'rating' => '4.9 (145 Reviews)'],
            ['name' => 'Asymmetric Strappy Sports Bra & Biker Shorts Set', 'price' => '$79.90', 'image' => 'https://i.pinimg.com/1200x/64/db/3b/64db3be1b66b60121046c04174b14e5a.jpg', 'rating' => '4.6 (180 Reviews)'],
            ['name' => 'Sporty V-Neck Tank Top & Pleated Tennis Skirt Set', 'price' => '$78.00', 'image' => 'https://i.pinimg.com/736x/6b/ea/6e/6bea6eeee7d43457f652be711c770064.jpg', 'rating' => '4.8 (240 Reviews)'],
            ['name' => 'Preppy Contrast-Collar Activewear Tennis Dress', 'price' => '$75.00', 'image' => 'https://i.pinimg.com/1200x/68/56/2e/68562e646b88c3aaa2f6d812972d3686.jpg', 'rating' => '4.7 (155 Reviews)'],
            ['name' => 'Preppy Active Dress White Variant', 'price' => '$76.00', 'image' => 'https://i.pinimg.com/736x/11/a6/79/11a679a75d2212c75553f923688e8371.jpg', 'rating' => '4.9 (192 Reviews)'], // Menambahkan nama yang kosong di controller asli
            ['name' => 'Premium Slim-Fit Zip Jacket & Flared Leggings Set', 'price' => '$72.00', 'image' => 'https://i.pinimg.com/736x/a5/ac/27/a5ac27c729f9b7b32e2cef27fa905c24.jpg', 'rating' => '5.0 (88 Reviews)'],
            ['name' => 'Performance Training Zipper Jacket & Leggings Set', 'price' => '$75.00', 'image' => 'https://i.pinimg.com/736x/e4/b8/b5/e4b8b58423d6a55c29693b41ac1f69db.jpg', 'rating' => '4.8 (137 Reviews)'],
            ['name' => 'Chic V-Cross High-Waist Bra & Leggings Gym Set', 'price' => '$71.00', 'image' => 'https://i.pinimg.com/736x/32/62/7d/32627da469f9fe22bb6869cd5e5dd187.jpg', 'rating' => '4.7 (204 Reviews)'],
            ['name' => 'Casual Varsity Los Angeles 79 Sweatshirt & Joggers Set', 'price' => '$76.90', 'image' => 'https://i.pinimg.com/1200x/1e/75/52/1e7552a9a1c6bddabf6ae9c939ffe64c.jpg', 'rating' => '4.9 (165 Reviews)'],
            ['name' => 'Cozy New York Brooklyn Quarter-Zip & Sweatpants Set', 'price' => '$79.00', 'image' => 'https://i.pinimg.com/736x/6a/83/fc/6a83fc547d420b6cc863fce754eecec0.jpg', 'rating' => '4.8 (290 Reviews)'],
            ['name' => 'Streetwear 89 Cropped Long-Sleeve & Wide Joggers Set', 'price' => '$70.50', 'image' => 'https://i.pinimg.com/736x/17/96/42/1796429189113214458b6204a201e4fa.jpg', 'rating' => '4.9 (412 Reviews)'],
        ];

        // 3. Fungsi Bantu untuk Memasukkan Data Massal
        $this->insertProducts($topsData, $categories['Tops'], $id_seller);
        $this->insertProducts($bottomData, $categories['Bottom'], $id_seller);
        $this->insertProducts($dressesData, $categories['Dresses'], $id_seller);
        $this->insertProducts($outerwearData, $categories['Outerwear'], $id_seller);
        $this->insertProducts($activewearData, $categories['Activewear'], $id_seller);
    }

    private function insertProducts(array $products, int $categoryId, int $sellerId): void
    {
        foreach ($products as $item) {
            // Bersihkan tanda '$' dari harga string agar menjadi float/decimal sesuai database
            $cleanPrice = (float) str_replace('$', '', $item['price']);

            Product::create([
                'id_seller' => $sellerId,
                'id_category' => $categoryId,
                'nama_produk' => $item['name'],
                'deskripsi' => $item['rating'] ?? 'No rating available.', // rating ditaruh di deskripsi sementara sesuai kolom migration Anda
                'harga' => $cleanPrice,
                'gambar' => $item['image'],
            ]);
        }
    }
}