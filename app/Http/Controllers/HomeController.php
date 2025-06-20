<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Staff;
use App\Models\Service;

class HomeController extends Controller
{
    public function home(){


        $aboutus= About::first();
        $staffs= Staff::all();
        $galleries= Gallery::all();
        $services = Service::all();
        return view('welcome',compact('galleries','aboutus','staffs','services'));
    }

    public function show($id)
    {
        $show = Service::find($id);
        return view('frontend.show',compact('show'));
    }
}
