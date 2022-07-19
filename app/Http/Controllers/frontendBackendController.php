<?php

namespace App\Http\Controllers;

use App\Models\aboutme;
use App\Models\main;
use Illuminate\Http\Request;

class frontendBackendController extends Controller
{
    public function frontend()
    {
        $home = main::first();
        $about_me = aboutme::first();
        return view('frontend.layouts.app',['main'=>$home,'aboutme'=>$about_me]);
    }

    public function backend()
    {
        return view('backend.layouts.app');
    }
}
