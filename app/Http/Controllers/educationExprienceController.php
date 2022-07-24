<?php

namespace App\Http\Controllers;

use App\Models\education;
use App\Models\exprience;
use Illuminate\Http\Request;

class educationExprienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backendpages.exprience_education.exprienceeducation_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->company_name!="")
        {
             $request->validate([
            'designation'=>'required',
            'company_name'=>'required',
            'exp_year_start'=>'required',
            'exp_year_end'=>'required',
            'exp_description'=>'required'
        ]);
            $exprience = new exprience();

            $exprience->designation       = $request->designation;
            $exprience->company_name      = $request->company_name;
            $exprience->exp_year_start    = $request->exp_year_start;
            $exprience->exp_year_end      = $request->exp_year_end;
            $exprience->exp_description   = $request->exp_description;
            $exprience->save();
        }elseif( $request-> institute!="")
        {
             $request->validate([
            'degree'=>'required',
            'institute'=>'required',
            'year_start'=>'required',
            'year_end'=>'required',
            'description'=>'required'
        ]);
            $education = new education();

            $education->degree        = $request->degree;
            $education->institute     = $request->institute;
            $education->year_start    = $request->year_start;
            $education->year_end      = $request->year_end;
            $education->description   = $request->description;
            $education->save();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $educations = education::all();
       $expriences = exprience::all();

       return view('backendpages.exprience_education.exprienceeduaction_list',['educations'=>$educations],['expriences'=>$expriences]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
