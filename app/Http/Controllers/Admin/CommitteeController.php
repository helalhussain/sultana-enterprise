<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Committee;
use App\Models\Member;
use Yajra\DataTables\Facades\DataTables;

class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::eloquent(Committee::query())
                ->addIndexColumn()
                ->addColumn('action', fn () => '')
                ->toJson();
        }
        return view('admin.committee.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Committee $committee)
    {

        $members = Member::all();
        return view('admin.committee.form',compact('members'));

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $store = new Committee();
        $store->member_id = $request->member;
        $store->slug = "slug";
        $store->designation = $request->designation;
        $store->designation_bn = $request->designation_bn;
        $store->save();
        // return response()->json([
        //     'message' => 'Committee added successfully'
        // ]);
        return redirect()->route('admin.committee.index')->with('success','Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Committee $committee)
    {
        return view('admin.committee.show',compact('committee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Committee $committee)
    {
        $members = Member::all();
        return view('admin.committee.edit',compact('committee','members'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Committee $committee)
    {

         $committee->update([
            'member_id'=>$request->member,
            'designation'=>$request->designation,
            'designation_bn' => $request->designation_bn,
        ]);

        return redirect()->route('admin.committee.index');
        // return response()->json(['message' => 'Present committee updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Committee $committee)
    {
        $committee->delete();
        return response()->json([
            'message'=>'Committee deleted successfylly'
        ]);
    }
}
