<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('front.index');
    }
    public function about(){
        return view('front.about');
    }
    public function health(){
        return view ('front.health');
    }
    public function education(){
        return view ('front.education');
    }
    public function gallery(){
        return view ('front.gallery');
    }

    public function contact(){
        return view ('front.contact');
    }
}
