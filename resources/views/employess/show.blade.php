@extends('layout')
@section('content')

        <div class="col mt-5">
            <div class="item"> <img src="{{ asset('storage/' . $employee->img) }}" class="img-thumbnail"
                    alt="Profile picture">
            </div>
        </div>
        <div class="col">
            <div class="item">
                <h3>{{ $employee->name }}</h6>
            </div>
        </div>
        <div class="col">
            <div class="item">
                <h6>Salary:{{ $employee->salary }}</h6>
            </div>
        </div>
        <div class="col">
            <div class="item">
                <h6>Department: {{ $employee->Departments->name }}</h6>
            </div>
        </div>
        <div class="col">
            <div class="item">
                <h6>Dependent: {{ $employee->Dependents->name }}</h6>
            </div>
        </div>


@endsection
