@extends('backend.layouts.app')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Education & Exprience</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Education & Exprience List</li>
        </ol>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Education List
                      </button>
                    </h2>
                  </div>
            </div>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Education List</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Degree</th>
                                        <th>Institute</th>
                                        <th>Year Start</th>
                                        <th>Year End</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($educations as $education)
                                        <tr>
                                            <td>{{$education->degree}}</td>
                                            <td>{{$education->institute}}</td>
                                            <td>{{$education->year_start}}</td>
                                            <td>{{$education->year_end}}</td>
                                            <td>{{$education->description}}</td>
                                            <td class="text-center">
                                                <a data-toggle="modal" data-target="#educationstaticBackdrop" class="btn btn-primary btn-sm" href="#"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-danger btn-sm" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        Exprience List
                      </button>
                    </h2>
                  </div>
            </div>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Exprience List</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Position</th>
                                        <th>Company Name</th>
                                        <th>Year Start</th>
                                        <th>Year End</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($expriences as $exprience)
                                        <tr>
                                            <td>{{$exprience->designation}}</td>
                                            <td>{{$exprience->company_name}}</td>
                                            <td>{{$exprience->exp_year_start}}</td>
                                            <td>{{$exprience->exp_year_end}}</td>
                                            <td>{{$exprience->exp_description}}</td>
                                            <td class="text-center">
                                                <a data-toggle="modal" data-target="#staticBackdropexprience" class="btn btn-primary btn-sm" href="{{url('educationexprience/edit/',['exprience_id'=>$exprience->id])}}"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-danger btn-sm" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Modal for Education-->
<div class="modal fade" id="educationstaticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="educationstaticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="educationstaticBackdropLabel">Education</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal for Exprience -->
<div class="modal fade" id="staticBackdropexprience" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropexprienceLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropexprienceLabel">Exprience</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>
@endsection
