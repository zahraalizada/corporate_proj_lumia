<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StaticElements;
use App\Models\About;

class Homepage extends Controller
{
    public function index()
    {
        // Static elements
        $items = StaticElements::all();
        $arr = [];
        foreach ($items as $value) {
            $arr[$value->static_key] = $value->static_value;
        }

        // About elements
        $items_about = About::first();

        // Card elements

        return view('front.homepage', compact('items','arr','items_about'));
    }


//    public function about(){
//        $items = About::first();
//        return view('front.homepage', compact('items'));
//    }
}
