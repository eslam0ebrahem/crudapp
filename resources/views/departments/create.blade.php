@extends('layout')
@section('content')
    <div class="container mt-5" >
        <form method="POST" action="/department">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="txt" name="name" class="form-control" id="name">
                @error('name')
                    <p class="text-Danger text-xs mt-1" >{{ $message }}</p>
                @enderror
            </div>
            <button class="btn btn-success">Submit</button>
        </form>
    </div>
    @endsection
