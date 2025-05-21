<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about_us = About::first();
        return view('admin.about.index',compact('about_us'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        if($request->file==null){
            $file = null;
        }else{
            $file = file_upload($request->file, 'aboutus');
        }

        $about->update([
            'about_us'=>$request->about_us,
            'about_us_bn'=>$request->about_us_bn,
            'image'=>$file,
            'name'=>$request->name,
            'about_owner'=>$request->about_owner,
        ]);
        return response()->json(['message' => 'About us updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
