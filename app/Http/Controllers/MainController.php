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

    public function update(Request $request)
    {
      $this->validate($request,[
        'title'=>'required|string',
        'subtitle'=>'required|string',
      ]);

      $main = main::first();

      $main->title    = $request->title;
      $main->subtitle = $request->subtitle;

      if($request->file('bc_image'))
      {
        $img_file = $request->file('bc_image');
        $img_file->storeAs('public/img/','bc_image.'.$img_file->getClientOriginalExtension());
        $main->bc_image='storage/img/bc_img.'.$img_file->getClientOriginalExtension();
      }

      if($request->file('resume'))
      {
        $pdf_file=$request->file('resume');
        $pdf_file->storeAs('public/pdf/',"resume.".$pdf_file->getClientOriginalExtension());
        $main->resume='storage/pdf/resume.'.$pdf_file->getClientOriginalExtension();
      }

        $main->save();
    }
}
