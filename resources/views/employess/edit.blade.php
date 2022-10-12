@extends('layout')
@section('content')
    <div class="container">
        <form method="POST" action="/employee/{{ $employee->id }}"enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="txt" name="name" class="form-control" id="name" value={{ $employee->name }}>
                @error('name')
                    <p class="text-Danger text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" name="salary" class="form-control" id="salary" value={{ $employee->salary }}>
                @error('salary')
                    <p class="text-Danger text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="dependent" class="form-label">Dependence</label>
                <select class="form-select" name="dependent_id" id="dependent">
                    @foreach ($dependents as $item)
                        <option value="1" {{ $employee->dependents->name === $item->name ? 'selected' : null }}>
                            {{ $item->name }}
                        </option>
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
                        <option value="1" {{ $employee->departments->name === $item->name ? 'selected' : null }}>
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
                <img src="{{ asset('storage/' . $employee->img) }}" class="img-thumbnail" alt="Profile picture">

                @error('file')
                    <p class="text-Danger text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button class="btn btn-success">Update</button>
        </form>
    </div>
    @endsection
