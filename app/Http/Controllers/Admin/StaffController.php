<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::eloquent(Staff::query())
                ->addIndexColumn()
                ->addColumn('action', fn () => '')
                ->toJson();
        }
        return view('admin.staff.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.staff.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

        ]);
        if($request->image==null){
            $file = null;
        }else{
            $file = file_upload($request->image, 'staff');
        }
        // dd($request->all());
        $store = new Staff();
        $store->name = $request->name;
        $store->name_bn = $request->name_bn;
        // $store->email = $request->email;
        $store->designation = $request->designation;
        $store->designation_bn = $request->designation_bn;

        $store->gender = $request->gender;
        $store->gender_bn = $request->gender_bn;

        $store->image =  $file;
        $store->save();

        return redirect()->route('admin.staff.index')->with('success','Success');
        // return response()->json([
        //     'message' => 'Notice added successfully'
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {

        return view('admin.staff.show',compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        return view('admin.staff.edit',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {
        if($request->image==null){

            $staff->update([
                'name' => $request->name,
                'name_bn' => $request->name_bn,
                'designation' => $request->designation,
                'designation_bn' => $request->designation_bn,
                'gender' => $request->gender,
                'gender_bn' => $request->gender_bn,

                ]);
        }else{

            $staff->update([
                'name' => $request->name,
                'name_bn' => $request->name_bn,
                'designation' => $request->designation,
                'designation_bn' => $request->designation_bn,
                'gender' => $request->gender,
                'gender_bn' => $request->gender_bn,
                'image' => file_upload($request->image, 'staff'),
                ]);

        }
        // dd($request->all());

        return redirect()->route('admin.staff.index')->with('success','Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
