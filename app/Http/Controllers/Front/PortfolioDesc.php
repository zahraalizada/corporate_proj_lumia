<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;

use App\Models\Portfolio;
use Illuminate\Http\Request;

use App\Models\SocialLink;


class PortfolioDesc extends Controller
{
    public function index(){

        // Portfolio elements
        $portfolio_items = Portfolio::all();

//        dd($portfolio_items);
        // SocialLink website elements
        $social_link_website_items = SocialLink::where('image_card_id',0)->get();

        return view('front.portfolio_desc', compact('portfolio_items','social_link_website_items'));
    }
}
