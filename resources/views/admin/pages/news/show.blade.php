@extends('admin.index')
@section('content')

    <div class="form-row">

        <div class="form-group col-md-4">
            <h5> News Title</h5>
            {{ $news->name }}
        </div>
        <div class="form-group col-md-4">
            <h5> Upload Main Photo</h5>
            <img src='{{ url($news->photo) }}'>

        </div>

        <div class="form-group col-md-4">
            <h5> Categories</h5>
            {{ $news->category }}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <h5> Content</h5>
            {{ $news->content }}
        </div>
    </div>


@endsection
@section('title', 'Show News')
@section('title2', 'News/Show News')
