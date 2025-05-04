<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Staff;


class DashboardController extends Controller
{
    public function index(){

        $staffs = Staff::all();

        return view('admin.dashboard',compact('staffs'));
    }
}
