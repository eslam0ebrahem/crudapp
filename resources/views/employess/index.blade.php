@extends('layout')
@section('content')
    <div class="justify-content-center row  mt-5">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Employees</h2>
                    <a href="{{ url('/dependent') }}" class="btn  btn-info btn-sm" title="Add New Employe">
                        <i class="fa fa-plus" aria-hidden="true"></i>dependents
                    </a>

                    <a href="{{ url('/department') }}" class="btn btn-secondary btn-sm" title="Add New Employe">
                        <i class="fa fa-plus" aria-hidden="true"></i>departments
                    </a>

                </div>
                <div class="card-body">
                    <a href="{{ url('/employee/create') }}" class="btn btn-success btn-sm" title="Add New Employe">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <a href="{{ url('/employee/' . $item->id) }}" title="View Employe"><button
                                                    class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                                    View</button></a>
                                            <a href="{{ url('/employee/' . $item->id . '/edit') }}"
                                                title="Edit Employe"><button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    Edit</button></a>
                                            <form method="POST" action="/employee/{{ $item->id }}"
                                                style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i>
                                                    Delete</button>
                                            </form>

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
@endsection
