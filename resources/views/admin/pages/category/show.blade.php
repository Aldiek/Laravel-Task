@extends('admin.index')
@section('content')


    <div class="alert alert-dark" role="alert">
        {{ $category->name }}
    </div>
@endsection
@section('title', 'Show Category')
@section('title2', 'Category/Show Category')
