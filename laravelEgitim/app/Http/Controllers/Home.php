<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    function test($isim){
        return view('home',['isim'=>$isim]);
    }
}
