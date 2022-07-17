<?php

namespace App\Http\Controllers;

use App\Models\main;
use Illuminate\Http\Request;

class frontendBackendController extends Controller
{
    public function frontend()
    {
        $home = main::first();
        return view('frontend.layouts.app',['main'=>$home]);
    }

    public function backend()
    {
        return view('backend.layouts.app');
    }
}
