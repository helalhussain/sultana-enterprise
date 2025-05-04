<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class ContactController extends Controller
{
    public function index()
    {
        // $contact = Setting::first();
        return view('frontend.contact');
    }
}
