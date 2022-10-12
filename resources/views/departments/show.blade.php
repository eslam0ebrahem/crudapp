@extends('layout')
@section('content')
    <div class="container text-center">

        <div class="col mt-5">
            <div class="item">
                <h3>{{ $department->name }}</h6>
            </div>
        </div>
        <div class="col">
            <div class="item">
                <h6>{{ $members }} Employees in this Department </h6>
            </div>
        </div>
        <div class="col">
            <div class="item">
                <a href="{{ url('/employee/') }}" title="All employee"><button class="btn btn-primary btn-sm"><i
                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        All Employees</button></a>
            </div>
        </div>
        <div class="col">
            <div class="item">
                <a href="{{ url('/dependent') }}" class="btn  btn-info btn-sm">
                    <i class="fa fa-plus" aria-hidden="true"></i>All Dependents
                </a>
            </div>
        </div>
    </div>
