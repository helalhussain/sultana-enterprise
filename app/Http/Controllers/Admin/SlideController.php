<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
use Yajra\DataTables\Facades\DataTables;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::eloquent(Slide::query())
                ->addIndexColumn()
                ->addColumn('action', fn () => '')
                ->toJson();
        }
        return view('admin.slide.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Slide $slide)
    {

        return view('admin.slide.form');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([

        ]);

        if($request->image==null){
            $img = null;
        }else{
            $img = file_upload($request->image, 'slide');
        }

        $store = new Slide();
        $store->title = $request->title;
        $store->title_bn = $request->title_bn;
        $store->image = $img;
        $store->save();
        return response()->json([
            'message' => 'Slide added successfully'
        ]);
    }



    /**
     * Display the specified resource.
     */
    public function show(Slide $slide)
    {

        return view('admin.slide.show',compact('slide'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slide $slide)
    {

        return view('admin.slide.form',compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request,Slide $slide)
    {


        $request->validate([

        ]);

        if($request->file==null){
            $slide->update([
                'title'=>$request->title,
                'title_bn'=>$request->title_bn,
        ]);
        }else{
            $slide->update([
                'title'=>$request->title,
                'title_bn'=>$request->title_bn,
                'image'=>file_upload($request->file, 'slide')

        ]);

        }
        // return redirect()->route('admin.slide.index');
        return response()->json(['message' => 'Slide updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slide $slide)
    {
        $slide->delete();
        return response()->json([
            'message'=>'Slide deleted successfylly'
        ]);
    }
}
