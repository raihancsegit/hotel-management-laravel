<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Banner;
class HomeController extends Controller
{
    //
    public function home(){
        $banners=Banner::where('publish_status','on')->get();
        $roomTypes=RoomType::all();
        $service=Service::all();
        $testimonials=Testimonial::all();
        return View('home',['roomTypes'=>$roomTypes,'services'=>$service,'testimonials'=>$testimonials,'banners'=>$banners]);
    }

    // Service Detail Page
    function service_detail(Request $request, $id){
        $service=Service::find($id);
        return View('servicedetail',['service'=>$service]);
    }

    // Add Testimonial
    function add_testimonial(){
        return view('add-testimonial');
    }

    // Save Testimonial
    function save_testimonial(Request $request){
        $customerId=session('data')[0]->id;
        $data=new Testimonial;
        $data->customer_id=$customerId;
        $data->testi_cont=$request->testi_cont;
        $data->save();

        return redirect('customer/add-testimonial')->with('success','Data has been added.');
    }
}
