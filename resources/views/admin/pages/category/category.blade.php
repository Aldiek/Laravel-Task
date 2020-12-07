@extends('admin.index')
@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>

                        <form action="{{ route('category.destroy', $category->id) }}" method="post" class="inline">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('category.edit', $category->id) }}"><button type="button"
                                    class="btn btn-primary">Edit</button></a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a href="{{ route('category.show', $category->id) }}"><button type="button"
                                    class="btn btn-success">Show</button></a>
                        </form>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
@section('title', 'Category')
@section('title2', 'Category')
