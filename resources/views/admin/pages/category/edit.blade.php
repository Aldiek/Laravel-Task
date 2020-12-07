@extends('admin.index')
@section('content')
    <form method="POST" action="{{ route('category.update', $categories->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputtext1">Category Name</label>
            <input value="{{ $categories->name }}" name="name" type="text" class="form-control" id="exampleInputtext1"
                aria-describedby="textHelp" placeholder="Enter Category Name" required>
            <small id="textHelp" class="form-text text-muted">We'll never share your text with anyone else</small>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
@section('title', 'Edit Category')
@section('title2', 'Category/Edit Category')
