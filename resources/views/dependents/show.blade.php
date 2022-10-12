@extends('layout')
@section('content')
    <div class="col mt-5">
        <div class="item">
            <h3>{{ $dependent->name }}</h6>
        </div>
    </div>
    <div class="col">
        <div class="row">
            <div class="item mb-1">
                <a href="{{ url('/employee/') }}" title="All employee"><button class="btn btn-primary btn-sm"><i
                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        All Employees</button></a>
            </div>
            <div class="item">
                <a href="{{ url('/department') }}" class="btn btn-secondary btn-sm">
                    <i class="fa fa-plus" aria-hidden="true"></i>All Departments
                </a>
            </div>
        </div>
    </div>
@endsection
