<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function about(){

        $aboutus = About::first();
        return view('frontend.about-us',compact('aboutus'));
    }
}
