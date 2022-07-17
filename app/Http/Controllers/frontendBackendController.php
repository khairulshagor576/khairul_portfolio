<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendBackendController extends Controller
{
    public function frontend()
    {
        return view('frontend.layouts.app');
    }

    public function backend()
    {
        return view('backend.layouts.app');
    }
}
