@extends('admin.index')
@section('content')
    <form>
        @csrf
        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="inputZip">Site Name</label>
                <input type="text" class="form-control" id="inputZip">
            </div>

            <div class="form-group col-md-4">
                <label for="inputZip">Site Email Address</label>
                <input type="text" class="form-control" id="inputZip">
            </div>

            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
        </div>



        <div class="form-group">
            <label for="exampleFormControlTextarea1">Site Keywords</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Site descripion</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="button" class="btn btn-success">Success</button>

    </form>
@endsection
