@extends('admin.index')
@section('content')


    <div class="alert alert-dark" role="alert">
        {{ $category->name }}
    </div>
@endsection
