@extends('layout')
@section('content')
    <div class="container mt-5">
        <form method="POST" action="/employee"enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="txt" name="name" class="form-control" id="name">
                @error('name')
                    <p class="text-Danger text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" name="salary" class="form-control" id="salary">
                @error('salary')
                    <p class="text-Danger text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="dependent" class="form-label">Dependence</label>
                <select class="form-select" name="dependent_id" id="dependent">
                    @foreach ($dependents as $item)
                        <option value={{ $loop->index + 1 }}>{{ $item->name }}</option>
                    @endforeach
                </select>
                @error('dependent')
                    <p class="text-Danger text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select class="form-select" name="department_id" id="department">
                    @foreach ($departments as $item)
                        <option value={{ $loop->index + 1 }}>
                            {{ $item->name }}</option>
                    @endforeach
                </select>
                @error('department')
                    <p class="text-Danger text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">Upload Image</label>
                <input class="form-control" name="img" type="file" id="file">
                @error('file')
                    <p class="text-Danger text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button class="btn btn-success" @disabled(!count($departments) || !count($dependents)) }>Submit</button>
            @if (!count($departments) || !count($dependents))
                <p class="text-Danger text-xs mt-1">{{ 'You have to add at least one department and dependent first ' }}
                </p>
            @endif

        </form>
    </div>
    @endsection
