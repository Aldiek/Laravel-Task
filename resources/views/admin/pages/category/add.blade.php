@extends('admin.index')
@section('content')
    <form method="POST" action="{{ route('category.store') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputtext1">Category Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp"
                placeholder="Enter Category Name">
            @error('name')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>

            @enderror
            <small id="textHelp" class="form-text text-muted">We'll never share your text with anyone else</small>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
@section('title', 'Add Category')
@section('title2', 'Category/Add Category')
