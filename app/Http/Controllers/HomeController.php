<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;

class HomeController extends Controller
{
    //
    public function home(){

        $roomTypes=RoomType::all();
        return View('home',['roomTypes'=>$roomTypes]);
    }
}
