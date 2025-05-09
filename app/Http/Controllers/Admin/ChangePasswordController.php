<?php

 namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        return view('admin.profile.password');
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);
        $admin = Auth::guard('admin')->user();
        $auth = Admin::find($admin->id);
        $auth->update([
            'password' => Hash::make($request->password),
        ]);
        // $request->administator()->update([
        //     'password' => Hash::make($validated['password']),
        // ]);
        return redirect()->route('admin.profile.show');
        // return back()->with('status', 'password-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
