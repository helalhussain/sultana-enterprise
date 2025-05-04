<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use Yajra\DataTables\Facades\DataTables;


class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::eloquent(Notice::query())
                ->addIndexColumn()
                ->addColumn('action', fn () => '')
                ->toJson();
        }
        return view('admin.notice.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Notice $notice)
    {

        return view('admin.notice.form');

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
            $file = file_upload($request->file, 'notice');
        }

        $store = new Notice();
        $store->title = $request->title;
        $store->title_bn = $request->title_bn;
        $store->file =  $file;
        $store->save();
        return response()->json([
            'message' => 'Notice added successfully'
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Notice $notice)
    {

        return view('admin.notice.show',compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notice $notice)
    {

        return view('admin.notice.form',compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request,Notice $notice)
    {


        $request->validate([

            'title' => 'required',

        ]);
        if($request->file==null){
            $notice->update([
                'title'=>$request->title,
                'title_bn'=>$request->title_bn,
        ]);
        }else{
            $notice->update([
                'title'=>$request->title,
                'title_bn'=>$request->title_bn,
                'file'=>file_upload($request->file, 'notice')

        ]);

        }
        // return redirect()->route('admin.notice.index');
        return response()->json(['message' => 'Notice updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notice $notice)
    {
        $notice->delete();
        return response()->json([
            'message'=>'Notice deleted successfylly'
        ]);
    }
}
