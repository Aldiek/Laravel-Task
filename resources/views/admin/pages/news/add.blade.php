@extends('admin.index')
@section('content')
    <form method="POST" action="">
        @csrf
        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="inputZip">News Title</label>
                <input name="name" type="text" class="form-control" id="inputZip">
            </div>
            <div class="form-group col-md-4">
                <br>
                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                <label class="custom-file-label" for="validatedCustomFile">Upload Main Photo</label>
            </div>

            <div class="form-group col-md-4">
                <label for="inputState">Categories</label>
                <select name="category" id="inputState" class="custom-select form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->name }}">
                            {{ $category->name }}
                        </option>

                    @endforeach
                </select>
            </div>
        </div>



        <div class="form-group">
            <label for="exampleFormControlTextarea1">News Content</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Drop Zone Upload Image</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="button" class="btn btn-success">Add</button>

    </form>
@endsection
