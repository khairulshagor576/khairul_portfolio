@extends('backend.layouts.app')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">About Me</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">About Me</li>
        </ol>
        <form action="{{route('admin.aboutme.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$aboutme->title}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="degree">Degree</label>
                    <input type="text" class="form-control" id="degree" name="degree" value="{{$aboutme->degree}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exprience">Experience</label>
                    <input type="text" class="form-control" id="exprience" name="exprience" value="{{$aboutme->exprience}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="mobile_number">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile_number" name="mobile_number" value="{{$aboutme->mobile_number}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for=" description">Myself Description</label>
                    <textarea class="form-control" rows="2" id="description" name="description">{{$aboutme->description}}</textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for=" address">Address</label>
                    <textarea class="form-control" rows="2" id="address" name="address">{{$aboutme->address}}</textarea>
                </div>
            </div> 
            <div class="row">
                <div class="form-group col-md-4">
                    <h4>Profile Image</h4>
                    <img style="height: 20vh;" class="img-thumbnail" src="{{url($aboutme->profile_image)}}">
                    <input class="mt-2" type="file" id="profile_image" name="profile_image">
                </div>
            </div>
            <input type="submit" class="btn btn-primary mt-3">    
        </form>
    </div>        
</main> 
@endsection