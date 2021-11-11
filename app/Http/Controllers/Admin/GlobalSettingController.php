<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GlobalSetting;
use App\Http\Requests\GlobalSettingRequest;
use File;
use Image;

class GlobalSettingController extends Controller
{
    public function index()
    {
        $setting= GlobalSetting::first()->toArray();
        return view('admin.setting.gsetting',compact('setting'));
    }
    public function edit(GlobalSetting $globalSetting)
    {
        $setting= GlobalSetting::first()->toArray();
        return view('admin.setting.gsetting_edit',compact('setting'));
    }
    public function update(GlobalSettingRequest $request)
    {
        $globalSetting= GlobalSetting::find(1);
        $globalSetting->name = $request->name;
        $globalSetting->email = $request->email;
        $globalSetting->phone_no = $request->fullphone_no;
        $globalSetting->address = $request->address;
        $globalSetting->footer = $request->footer;
        $globalSetting->latitude = $request->latitude;
        $globalSetting->longtitude = $request->longtitude;
        $globalSetting->google_analytic_script = $request->google_analytic_script;
        $globalSetting->facebook = $request->facebook;
        $globalSetting->twitter = $request->twitter;
        $globalSetting->linkedin = $request->linkedin;
        $globalSetting->youtube = $request->youtube;
        $globalSetting->instagram = $request->instagram;
        $globalSetting->play_store = $request->play_store;
        $globalSetting->app_store = $request->app_store;

        if($request->file('logo')){
            if(File::exists(public_path('Backend/setting/'.$globalSetting->logo))){
                File::delete(public_path('Backend/setting/'.$globalSetting->logo));
            }
            $image = $request->file('logo');
            $input['imagename'] = time().'setting.'.$image->extension();
         
            $destinationPath = public_path('/Backend/setting');
            $img = Image::make($image->path());
            $img->resize(800,800, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);
            $globalSetting->logo = $input['imagename'];
            // $imagebase64 = base64_encode(file_get_contents($request->file('logo')));
            $globalSetting->logo_base64 = '';
        }
        if($request->file('favicon')){
            if(File::exists(public_path('Backend/setting/'.$globalSetting->favicon))){
                File::delete(public_path('Backend/setting/'.$globalSetting->favicon));
            }
            $image = $request->file('favicon');
            $input['imagename'] = time().'setting.'.$image->extension();
         
            $destinationPath = public_path('/Backend/setting');
            $img = Image::make($image->path());
            $img->resize(800,800, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);
            $globalSetting->favicon = $input['imagename'];
        }

        $globalSetting->save();
        toastr()->success('Setting Update Successfully');
        return redirect()->route('admin.global_setting.edit');
    }
}
