@extends('layout')
@section('content')
    <div class="row text-center h-100 align-content-center justify-content-center">
        <div class="row text-center mb-5">
            <h1>CRUD</h1>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-4 mb-3 mb-md-0"> <a href="{{ url('/employee') }}"
                    class="btn w-100  btn-success btn-sm" title="Add New Employe">
                    <i class="fa fa-plus" aria-hidden="true"></i> employees<br />{{ $employees }}
                </a>
            </div>
            <div class="col-sm-12 col-md-4 mb-3 mb-md-0"> <a href="{{ url('/dependent') }}" class="btn w-100 btn-info btn-sm"
                    style="color:white" title="Add New Employe">
                    <i class="fa fa-plus" aria-hidden="true"></i>dependents <br />{{ $dependents }}
                </a>
            </div>
            <div class="col-sm-12 col-md-4 mb-3 mb-md-0"> <a href="{{ url('/department') }}"
                    class="btn w-100 btn-secondary btn-sm" title="Add New Employe">
                    <i class="fa fa-plus" aria-hidden="true"></i>departments<br /> {{ $departments }}
                </a>
            </div>
        </div>
    </div>
@endsection
