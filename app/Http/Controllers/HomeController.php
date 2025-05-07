<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.pages.index');
    }

    public function about(){
        return view('home.pages.about');
    }

    public function contact(){
        return view('home.pages.contact');
    }

    public function project(){
        return view('home.pages.project');
    }

    public function faq(){
        return view('home.pages.faq');
    }

    public function services(){
        return view('home.pages.services');
    }
}
