<?php

namespace App\Http\Controllers;

use App\Models\aboutme;
use Illuminate\Http\Request;

class AboutmeController extends Controller
{
    public function index()
    {
        $about_me = aboutme::first();
        return view('backendpages.aboutme',['aboutme'=>$about_me]);
    }

    public function update(Request $request)
    {
      $request->validate([
        'title'=>'required',
        'description'=>'required',
        'degree'=>'required',
        'exprience'=>'required',
        'mobile_number'=>'required',
        'address'=>'required'
      ]);

      $about_me = aboutme::first();

      $about_me->title         = $request->title;
      $about_me->description   = $request->description;
      $about_me->degree        = $request->degree;
      $about_me->exprience     = $request->exprience;
      $about_me->mobile_number = $request->mobile_number;
      $about_me->address       = $request->address;

      if($request->file('profile_image'))
      {
        $img_file = $request->file('profile_image');
        $img_file->storeAs('public/img/','profile_image.'.$img_file->getClientOriginalExtension());
        $about_me->bc_image='storage/img/profile_image.'.$img_file->getClientOriginalExtension();
      }
        $about_me->save();
    }
}
