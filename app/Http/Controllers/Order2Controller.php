<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Order2Controller extends Controller
{
        public function done()
    {
        return view('pages.Order2');
    }

        public function back()
        {
            return view('pages.order');
        }


}
