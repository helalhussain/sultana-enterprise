<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\About;
use App\Models\Staff;

class HomeController extends Controller
{
    public function home(){


        $aboutus= About::first();
        $staffs= Staff::all();
        return view('welcome',compact('aboutus','staffs'));
    }
}
