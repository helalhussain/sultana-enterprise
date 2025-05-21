<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Notifications\ContactUs;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Notifiable;
Use App\Models\Admin;

class ContactController extends Controller
{
    public function index()
    {
        // $contact = Setting::first();
        return view('frontend.contact');
    }

    public function contactSend(Request $request)
    {
        // dd($request->all());
        // $store = new Setting();
        $admin= Admin::find(1);

        // $store->name = $request->name;
        // $store->email = $request->email;
        // $store->subject = $request->subject;
        // $store->message = $request->message;
        Notification::send($admin, new ContactUs($request->name,$request->email,$request->subject,$request->description));

        // $store->notify(new ContactUs($request->name,$request->email,$request->subject,$request->message));
        // return response()->json([
        //     'message' => 'Message sent successfully'
        // ]);
        return redirect()->back();
    }
}

