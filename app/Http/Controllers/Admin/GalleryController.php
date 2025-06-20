<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Yajra\DataTables\Facades\DataTables;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::eloquent(Gallery::query())
                ->addIndexColumn()
                ->addColumn('action', fn () => '')
                ->toJson();
        }
        return view('admin.gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Gallery $gallery)
    {

        return view('admin.gallery.form');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
        ]);

        if($request->file==null){
            $file = null;
        }else{
            $file = file_upload($request->file, 'gallery');
        }

        $store = new Gallery();
        $store->title = $request->title;
        // $store->title_bn = $request->title_bn;
        $store->image =  $file;
        $store->save();
        return response()->json([
            'message' => 'Gallery added successfully'
        ]);
    }



    /**
     * Display the specified resource.
     */
     public function show(Gallery $gallery)
    {

        return view('admin.gallery.show',compact('gallery'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $notice)
    {

        return view('admin.gallery.form',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request,Gallery $gallery)
    {


        $request->validate([

            'title' => 'required',

        ]);
        if($request->file==null){
            $gallery->update([
                'title'=>$request->title,
                // 'title_bn'=>$request->title_bn,
        ]);
        }else{
            $gallery->update([
                'title'=>$request->title,
                // 'title_bn'=>$request->title_bn,
                'image'=>file_upload($request->file, 'gallery')

        ]);

        }
        // return redirect()->route('admin.notice.index');
        return response()->json(['message' => 'Gallery updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return response()->json([
            'message'=>'Gallery deleted successfylly'
        ]);
    }
}
