<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    function index(){
        return view('index');
    }
    function aboutUs(){
        return view('aboutus');
    }
    function contactUs(){
        return view('contactus');
    }
    function blog($name){
        return view('blog');
    }
    function blogs(){
        return view('blog');
    }
}
