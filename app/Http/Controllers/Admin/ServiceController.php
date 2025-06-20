<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        if (request()->ajax()) {
            return DataTables::eloquent(Service::query())
                ->addIndexColumn()
                ->addColumn('action', fn () => '')
                ->toJson();
        }
        return view('admin.service.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Service $service)
    {

        return view('admin.service.form');

    }

    /**
     * Store a newly created resource in storage.
     */
      public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
        ]);

        if($request->logo==null){
            $logo = null;
        }else{
            $logo = file_upload($request->logo, 'service');
        }
        if($request->imageone==null){
            $imageone = null;
        }else{
            $imageone = file_upload($request->imageone, 'service');
        }
          if($request->imagetwo==null){
            $imagetwo = null;
        }else{
            $imagetwo = file_upload($request->imagetwo, 'service');
        }
          if($request->imagethree==null){
            $imagethree = null;
        }else{
            $imagethree = file_upload($request->imagethree, 'service');
        }
          if($request->imagefour==null){
            $imagefour = null;
        }else{
            $imagefour = file_upload($request->imagefour, 'service');
        }





        $store = new Service();
        $store->name = $request->name;
        $store->name_bn = $request->name_bn;
        $store->about = $request->about;
        $store->about_bn = $request->about_bn;
        $store->description = $request->description;
        $store->description_bn = $request->description_bn;
        $store->logo =  $logo;
        $store->image_1 = $imageone;
        $store->image_2 = $imagetwo;
        $store->image_3 = $imagethree;
        $store->image_4 = $imagefour;
        $store->save();
       return redirect()->route('admin.service.index')->with('success','Success');
    }
    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.service.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        if($request->logo==null){

        if($request->imageone==null){
            $imageone = null;
        }else{
            $imageone = file_upload($request->imageone, 'service');
        }
          if($request->imagetwo==null){
            $imagetwo = null;
        }else{
            $imagetwo = file_upload($request->imagetwo, 'service');
        }
          if($request->imagethree==null){
            $imagethree = null;
        }else{
            $imagethree = file_upload($request->imagethree, 'service');
        }
          if($request->imagefour==null){
            $imagefour = null;
        }else{
            $imagefour = file_upload($request->imagefour, 'service');
        }



            $service->update([
                'name' => $request->name,
                'name_bn' => $request->name_bn,
                'about' => $request->about,
                'about_bn' => $request->about_bn,
                'description' => $request->description,
                'description_bn' => $request->description_bn,

                'image_1' => $imageone,
                'image_2' => $imagetwo,
                'image_3' => $imagethree,
                'image_4' => $imagefour,
                // 'image_1' => file_upload($request->imageone, 'service'),
                // 'image_2' => file_upload($request->imagetwo, 'service'),
                // 'image_3' => file_upload($request->imagethree, 'service'),
                // 'image_4' => file_upload($request->imagefour, 'service'),


                ]);
        }else{

            if($request->imageone==null){
            $imageone = null;
        }else{
            $imageone = file_upload($request->imageone, 'service');
        }
          if($request->imagetwo==null){
            $imagetwo = null;
        }else{
            $imagetwo = file_upload($request->imagetwo, 'service');
        }
          if($request->imagethree==null){
            $imagethree = null;
        }else{
            $imagethree = file_upload($request->imagethree, 'service');
        }
          if($request->imagefour==null){
            $imagefour = null;
        }else{
            $imagefour = file_upload($request->imagefour, 'service');
        }
            $service->update([
                'name' => $request->name,
                'name_bn' => $request->name_bn,
                'about' => $request->about,
                'about_bn' => $request->about_bn,
                'description' => $request->description,
                'description_bn' => $request->description_bn,
                   'logo' => file_upload($request->logo, 'service'),
                'image_1' => $imageone,
                'image_2' => $imagetwo,
                'image_3' => $imagethree,
                'image_4' => $imagefour,
                // 'image_1' => file_upload($request->imageone, 'service'),
                // 'image_2' => file_upload($request->imagetwo, 'service'),
                // 'image_3' => file_upload($request->imagethree, 'service'),
                // 'image_4' => file_upload($request->imagefour, 'service'),

            ]);

        }
        // dd($request->all());

        return redirect()->route('admin.service.index')->with('success','Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return response()->json([
            'message'=>'Service deleted successfylly'
        ]);
    }
}
