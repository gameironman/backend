<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class index extends Controller
{
    public function index(){


        $index = DB::table('news')->orderBy('id','desc')->take(3)->get();
        // dd($news);
        return view('html/index',compact('index'));




    }
    public function news(){
        $news = DB::table('news')->orderBy('id','desc')->paginate(6);
        // dd($news);
        return view('html/news',compact('news'));



    }
    public function news_info($news_id){
        $news_info = DB::table('news')->where('id','=', $news_id)->first();

        // dd($news_info);
        return view('html/news_info',compact('news_info'));



    }
    public function contact_us(){
        $contact_us = DB::table('news')->orderBy('title','desc')->take(3)->get();
        // dd($news);
        return view('html/contact_us',compact('contact_us'));



    }

}
