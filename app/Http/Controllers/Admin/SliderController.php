<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Http\Requests\SliderRequest;
use Auth;
use File;

class SliderController extends Controller
{
	public function index()
    {
        $sliders= Slider::where('is_delete',0)->get();
        return view('admin.sliders.list',compact('sliders'));
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
         return view('admin.sliders.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $data= new Slider;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->date_created = date('d-F-Y');
        $data->image = '';
        if($request->file('image')){
            $logoimageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('Backend/slider'), $logoimageName);
            $data->image = $logoimageName;
            }
        $data->save();
        return redirect()->route('admin.slider.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider,$id)
    {
        $id=  base64_decode($id);
        $data= $slider::find($id);
        print_r($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id=  base64_decode($id);
        $data= Slider::find($id);
        return view('admin.sliders.edit',compact('data'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request,$id)
    {
        $id = base64_decode($id);
        $data= Slider::find($id);
        $image =$data->image; 
        if($request->file('image')){
                if(File::exists(public_path('slider/'.$data->image))){
                    File::delete(public_path('slider/'.$data->image));
                }
                $logoimageName = time().'.'.$request->image->extension();  
                $request->image->move(public_path('slider'), $logoimageName);
                $image = $logoimageName;
            }
        $data->country= $request->country;
        $data->title= $request->title;
        $data->description= $request->description;
        $data->image= $image;
        $data->save();
        toastr()->success('slider updated Successfully');
        return redirect()->route('admin.slider.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id= base64_decode($id);
        $data= Slider::find($id);
        $data->is_delete=1;
        $data->save(); 
        toastr()->success('Slider Delete Successfully');
        return redirect()->route('admin.slider.index');
    }
    public function Status($id)
    {
        $id= base64_decode($id);
        $data= Slider::find($id);
        $newStatus= $data->status== 1 ? 0 : 1;
        $data->status=$newStatus;
        $data->save(); 
        if($newStatus==0){
                toastr()->error('Slider Deactivated Successfully');
        }else{
            toastr()->success('Slider Activated Successfully');
        }

        return redirect()->route('admin.slider.index');
    }
    public function RangeSearch(Request $request)
    {
        $permissions=[];
        if(Auth::guard('admin')->user()->role==2){
            $permissions= Permissions::where(['subadmin_id'=>Auth::guard('admin')->user()->id,'modal_name'=>'slider'])->first();
        }
        $startDate= date('Y-m-d',strtotime($request->start));
        $endDate= date('Y-m-d',strtotime($request->end));
        $StartDates= $request->start;
        $EndDates= $request->end;
        $sliders= Slider::where('is_delete',0)->whereBetween('created_at',[$startDate,$endDate])->latest()->get();
        return view('admin.sliders.list',compact('sliders','permissions','StartDates','EndDates'));

    }
}
