<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OuterwearController extends Controller
{
    private $outerwear = [
        ['id' => 101, 'name' => 'Chocolate Brown Faux-Leather Biker Jacket', 'price' => '$75.00', 'image' => 'https://i.pinimg.com/1200x/ee/ea/94/eeea943b8f162fc123a4dd63a250d4f6.jpg', 'rating' => '4.8 (210 Reviews)'],
        ['id' => 102, 'name' => 'Burgundy Faux-Leather Belted Cropped Jacket', 'price' => '$72.00', 'image' => 'https://i.pinimg.com/1200x/39/fb/18/39fb18fe4a89377411968dbc3e3b3f5f.jpg', 'rating' => '4.9 (185 Reviews)'],
        ['id' => 103, 'name' => 'Jet Black Faux-Leather Bomber Jacket', 'price' => '$78.00', 'image' => 'https://i.pinimg.com/736x/57/5c/8c/575c8c00f590ce6cf7107fb795c17d80.jpg', 'rating' => '4.7 (340 Reviews)'],
        ['id' => 104, 'name' => 'Charcoal Gray Oversized Wide-Collar Long Cardigan', 'price' => '$65.00', 'image' => 'https://i.pinimg.com/1200x/66/cb/46/66cb462f58325f56117cd177d6635bd4.jpg', 'rating' => '4.6 (190 Reviews)'],
        ['id' => 105, 'name' => 'Classic Khaki Double-Breasted Long Trench Coat', 'price' => '$79.90', 'image' => 'https://i.pinimg.com/1200x/ee/49/ef/ee49ef3fb8fc9655502c074a996a4fc3.jpg', 'rating' => '4.9 (420 Reviews)'],
        ['id' => 106, 'name' => 'Tan Brown Sherpa-Lined Double-Breasted Long Coat', 'price' => '$64.00', 'image' => 'https://i.pinimg.com/1200x/f2/ae/b4/f2aeb480f26e34ca412f8b8d8031f8e2.jpg', 'rating' => '4.8 (150 Reviews)'],
        ['id' => 107, 'name' => 'Classic Blue Cable-Knit Buttoned Cardigan', 'price' => '$58.50', 'image' => 'https://i.pinimg.com/736x/83/97/2e/83972e546b66d30050987c80c86842bd.jpg', 'rating' => '4.7 (510 Reviews)'],
        ['id' => 108, 'name' => 'Boho Tribal Geometric Pattern Open Cardigan', 'price' => '$42.00', 'image' => 'https://i.pinimg.com/736x/fa/51/54/fa5154303378da12934a28c27ade3bf4.jpg', 'rating' => '4.8 (280 Reviews)'],
        ['id' => 109, 'name' => 'Elegant Dusty Pink Tweed Pattern Buttoned Cardigan', 'price' => '$52.00', 'image' => 'https://i.pinimg.com/1200x/e0/3b/aa/e03baac2a3719337d9fd5fcd8a20746e.jpg', 'rating' => '4.9 (670 Reviews)'],
        ['id' => 110, 'name' => 'Ultra-Cropped Red Long-Sleeve Hooded Shrug', 'price' => '$56.00', 'image' => 'https://i.pinimg.com/1200x/43/46/60/43466055835200abf254dcd24727948f.jpg', 'rating' => '4.7 (130 Reviews)'],
        ['id' => 111, 'name' => 'Aesthetic Pastel Marble Tie-Dye Cropped Hoodie', 'price' => '$69.90', 'image' => 'https://i.pinimg.com/1200x/bf/66/ce/bf66cee93c53210c562160d38c4516a6.jpg', 'rating' => '4.8 (220 Reviews)'],
        ['id' => 112, 'name' => 'Pastel Lime Green Cropped Tie-Back Hoodie', 'price' => '$69.00', 'image' => 'https://i.pinimg.com/1200x/a7/1f/b9/a71fb9b5de9f4c8611875c4207edf19d.jpg', 'rating' => '4.8 (480 Reviews)'],
        ['id' => 113, 'name' => 'Vibrant Pink Cropped Denim Jacket', 'price' => '$58.00', 'image' => 'https://i.pinimg.com/736x/de/55/b5/de55b58bd98b84767a8bdc8208a232a6.jpg', 'rating' => '4.6 (110 Reviews)'],
        ['id' => 114, 'name' => 'Classic Light Wash Cropped Denim Jacket', 'price' => '$75.00', 'image' => 'https://i.pinimg.com/736x/76/16/6f/76166fa18ff8f47a0e95fab2c7637184.jpg', 'rating' => '4.9 (165 Reviews)'],
        ['id' => 115, 'name' => 'Pastel Color-Block Cropped Denim Jacket', 'price' => '$68.00', 'image' => 'https://i.pinimg.com/1200x/1b/8f/0c/1b8f0c167ab8ed66329a1bd76b357357.jpg', 'rating' => '5.0 (95 Reviews)'],
    ];

    public function index(Request $request)
    {
        $data = $this->outerwear;
        $search = $request->query('search');

        if ($search) {
            $data = array_filter($data, function ($item) use ($search) {
                return false !== stripos($item['name'], $search);
            });
        }

        return view('pages.outerwear', ['outerwear' => $data]);
    }
}