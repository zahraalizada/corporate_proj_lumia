<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Communication;
use App\Models\IconCard;
use App\Models\ImageCard;
use App\Models\SocialLink;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Models\StaticElements;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\Contact;
use Termwind\Components\Dd;

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
        $about_item = About::first();

        // Portfolio elements
        $portfolio_items = Portfolio::all();

        // Communication elements
        $communication_item = Communication::first();

        // IconCard home elements
        $icon_card_home_items = IconCard::where('type', 'home')->get();

        // IconCard services elements
        $icon_card_services_items = IconCard::where('type', 'services')->get();

        // ImageCard home elements
        $image_card_testimonials_items = ImageCard::where('type', 'testimonials')->get();

        // ImageCard services elements
        $image_card_team_items = ImageCard::when('social')->where('type', 'team')->get();

        // SocialLink website elements
        $social_link_website_items = SocialLink::where('image_card_id',0)->get();

        return view('front.homepage', compact('items', 'arr', 'about_item', 'portfolio_items', 'communication_item', 'icon_card_home_items','icon_card_services_items','image_card_testimonials_items','image_card_team_items','social_link_website_items'));

    }

    public function contact(Request $request){



        $contact = new Contact;

        $contact->fullname = $request->fullname;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->route('contact');
    }



}
