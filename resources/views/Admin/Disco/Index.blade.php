@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>albums</h1>
                <a class="text-right" href="/admin/disco/create">Create New album</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Album Name</th>
                        <th scope="col">Artist</th>
                        <th scope="col">Year</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($albumsA as $album)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $album->Album}}</td>
                        <td>{{ $album["Artist"] }}</td>
                        <td>{{ $album->Year." "}}</td>
                        <td>
                            <a href="/admin/disco/{{ $album->_id }}">Details</a> |
                            <a href="/admin/disco/edit/{{ $album->_id }}">Edit</a> |
                            <a href="/admin/disco/delete/{{ $album->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection