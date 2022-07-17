<?php

namespace App\Http\Controllers;

use App\Models\main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $main = Main::first();
        return view('backendpages.main',['main'=>$main]);
    }
}
