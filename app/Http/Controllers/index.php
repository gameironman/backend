<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    public function index(){
        return view('html/index');

    

    }
    public function news(){
        return view('html/news');

    

    }
    public function news_info(){
        return view('html/news_info');

    

    }
    public function contact_us(){
        return view('html/contact_us');

    

    }
    
}
