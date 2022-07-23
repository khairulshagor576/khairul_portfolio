@extends('backend.layouts.app')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Education & Exprience</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Education & Exprience</li>
        </ol>
        <form action="{{route('admin.educationexprience.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <h3>Education</h3>
                </div>
                <div class="col-md-6">
                    <h3>Exprience</h3>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="degree">Degree</label>
                    <input type="text" class="form-control" id="degree" name="degree">
                </div>
                <div class="form-group col-md-6">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control" id="designation" name="designation">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="institute">Institute</label>
                    <input type="text" class="form-control" id="institute" name="institute">
                </div>
                <div class="form-group col-md-6">
                    <label for="company_name">Company Name</label>
                    <input type="text" class="form-control" id="company_name" name="company_name">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="year_start">Year Start</label>
                    <input type="text" class="form-control" id="year_start" name="year_start">
                </div>
                <div class="form-group col-md-6">
                    <label for="exp_year_start">Year Start</label>
                    <input type="text" class="form-control" id="exp_year_start" name="exp_year_start">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="year_end">Year End</label>
                    <input type="text" class="form-control" id="year_end" name="year_end">
                </div>
                <div class="form-group col-md-6">
                    <label for="exp_year_end">Year End</label>
                    <input type="text" class="form-control" id="exp_year_end" name="exp_year_end">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for=" description">Description</label>
                    <textarea class="form-control" rows="2" id="description" name="description"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for=" exp_description">Description</label>
                    <textarea class="form-control" rows="2" id="exp_description" name="exp_description"></textarea>
                </div>
            </div>   
            <input type="submit" class="btn btn-primary mt-3">    
        </form>
    </div>        
</main> 
@endsection