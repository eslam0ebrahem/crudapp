@extends('layout')
@section('content')
    <div class="row text-center h-100 align-content-center">
        <div class="row text-center mb-5">
            <h1>CRUD</h1>
        </div>
        <div class="row text-center">
            <div class="col"> <a href="{{ url('/employee') }}" class="btn w-100  btn-success btn-sm" title="Add New Employe">
                    <i class="fa fa-plus" aria-hidden="true"></i> employees<br />{{ $employees }}
                </a>
            </div>
            <div class="col"> <a href="{{ url('/dependent') }}" class="btn w-100 btn-info btn-sm" title="Add New Employe">
                    <i class="fa fa-plus" aria-hidden="true"></i>dependents <br />{{ $dependents }}
                </a>
            </div>
            <div class="col"> <a href="{{ url('/department') }}" class="btn w-100 btn-secondary btn-sm"
                    title="Add New Employe">
                    <i class="fa fa-plus" aria-hidden="true"></i>departments<br /> {{ $departments }}
                </a>
            </div>
        </div>
    </div>
@endsection
