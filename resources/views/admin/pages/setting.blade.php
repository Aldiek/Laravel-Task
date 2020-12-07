@extends('admin.index')
@section('content')
    <form method="POST" action="{{ route('setting.update', $data->id) }}">
        @csrf

        @method('PUT')
        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="inputZip">Site Name</label>
                <input value="{{ $data->site_name ?? '' }}" name="site_name" type="text" class="form-control" id="inputZip">
            </div>

            <div class="form-group col-md-4">
                <label for="inputZi">Site Email Address</label>
                <input value="{{ $data->email ?? '' }}" name="email" type="email" class="form-control" id="inputZi">
            </div>
        </div>


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Site Keywords</label>
            <textarea name="keywords" class="form-control" id="exampleFormControlTextarea1"
                rows="3">{{ $data->keywords ?? '' }}</textarea>
        </div>


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Site Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                rows="3">{{ $data->description ?? '' }}</textarea>
        </div>
        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="inputState">Maintenance</label>
                <select name="status" id="inputState" class="form-control">
                    <option value="open" {{ $data->status == 'open' ? 'selected' : '' }}>Open</option>
                    <option value="close" {{ $data->status == 'close' ? 'selected' : '' }}>Close</option>
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="exampleFormControlTextarea1">Maintenance Message</label>
                <textarea name="message_maintenance" class="form-control" id="exampleFormControlTextarea1"
                    rows="3">{{ $data->message_maintenance ?? '' }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <br>
    </form>
@endsection
@section('title', 'Setting')
@section('title2', 'Home/Setting')
