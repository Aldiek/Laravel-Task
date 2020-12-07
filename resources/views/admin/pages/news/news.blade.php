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
            @foreach ($newss as $news)
                <tr>
                    <th scope="row">{{ $news->id }}</th>
                    <td>{{ $news->name }}</td>
                    <td>

                        <form action="{{ route('news.destroy', $news->id) }}" method="post" class="inline">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('news.edit', $news->id) }}"><button type="button"
                                    class="btn btn-primary">Edit</button></a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a href="{{ route('news.show', $news->id) }}"><button type="button"
                                    class="btn btn-success">Show</button></a>
                        </form>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
@section('title', ' News')
@section('title2', 'News')
