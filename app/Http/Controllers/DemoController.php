<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demo(){
        $num1=10;
        $num2=20;
        $sum=$num1+$num2;
        return view('home',['num1Key'=>$num1,'num2Key'=>$num2,'sumKey'=>$sum]);
    }
}