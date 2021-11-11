<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests;
use App\Http\Requests\AdminProfileRequest;
use App\Http\Requests\UpdatePasswordRequest;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Image;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function myProfile()
    {
        return view('admin.profile');
    }
    public function updateProfile(AdminProfileRequest $request)
    {
        $user= auth()->guard('admin')->user();
         if($request->file('profile')){
            if(File::exists(public_path('Backend/profile/'.$user->profile))){
                File::delete(public_path('Backend/profile/'.$user->profile));
            }
            $image = $request->file('profile');
            $input['imagename'] = time().'profile.'.$image->extension();
         
            $destinationPath = public_path('/Backend/profile');
            $img = Image::make($image->path());
            $img->resize(800,800, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);
            $user->profile = $input['imagename'];
        }
        $user->save();
        toastr()->success('profile updated successfully');
        return view('admin.profile');
    }
     public function updatePassword(UpdatePasswordRequest $request)
    {
        $oldPass= auth()->guard('admin')->user()->password;
        if(Hash::check($request->old_password,$oldPass )){

        $newPassword = Hash::make($request->password);
        $adminData= Admin::find(auth()->guard('admin')->user()->id);
        $adminData->password = $newPassword;
        $adminData->save();
            toastr()->success('Password updated successfully');
        return back();
        }else{
            toastr()->error('Old Password is not valid');
            return back();
        }
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
