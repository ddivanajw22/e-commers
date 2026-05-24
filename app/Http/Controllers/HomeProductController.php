<?php



namespace App\Http\Controllers;



use App\Data\ProductData;



class HomeProductController extends Controller

{

    private function products()

    {

        return collect(ProductData::all());

    }



    

    public function newArrival()

    {

        $products = $this->products()

            ->sortByDesc('sold') 

            ->values();



        return view('pages.new-arrival', compact('products'));

    }



    

    public function bestSeller()

    {

        $products = $this->products()

            ->sortByDesc('sold')

            ->values();



        return view('pages.best-seller', compact('products'));

    }


    

    public function onDiscount()

    {

        $products = $this->products()

            ->where('is_discount', true)

            ->values();



        return view('pages.on-discount', compact('products'));

    }



   

    public function category($category)

    {

        $products = $this->products()

            ->where('category', $category)

            ->values();



        return view('pages.category', compact('products', 'category'));

    }

} 

