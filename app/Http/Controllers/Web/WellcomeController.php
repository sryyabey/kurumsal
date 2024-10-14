<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CompanyAddress;
use App\Models\ContactForm;
use App\Models\CustomerReview;
use App\Models\GalleryImage;
use App\Models\OurService;
use App\Models\Page;
use App\Models\Setting;
use App\Models\Social;
use App\Models\Team;
use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('message')){
            $contact = ContactForm::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message
            ]);
            return redirect()->route('welcome')->with('message','Your message has been sent. We will contact you soon.');
        }
        $comments = CustomerReview::all();
        $socials = Social::all();
        $address =CompanyAddress::all()->first();
        $services = OurService::all();
        $teams = Team::all();
        $galleries = GalleryImage::all();
        $pages = Page::all();
        $setting = Setting::first();
        return view('welcome',compact('address','comments','socials','services','teams','galleries','pages','setting'));
    }

    public function contact_form(Request $request)
    {
        dd($request->all());

    }
}
