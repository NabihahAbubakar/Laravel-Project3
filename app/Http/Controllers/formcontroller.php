<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formcontroller extends Controller
{
    public function index(){
        return view('contact');
    }
    public function form(Request $request){
        echo "<pre>";
        print_r($request->all());
    }
}

