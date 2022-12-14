@extends('layout')
@section('content')
    <div class="container">
        <form method="POST" action="/dependent/{{ $dependent->id }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="txt" name="name" class="form-control" id="name" value={{ $dependent->name }}>
                @error('name')
                    <p class="text-Danger text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button class="btn btn-success">Update</button>
        </form>
    </div>
    @endsection
