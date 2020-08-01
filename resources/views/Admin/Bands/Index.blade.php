@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>bands</h1>
                <a class="text-right" href="/admin/bands/create">Create New band</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">band Name</th>
                        <th scope="col">formed</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($bands as $band)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $band->band_name}}</td>
                        <td>{{ $band->formed." "}}</td>
                        <td>
                            <a href="/admin/bands/{{ $band->_id }}">Details</a> |
                            <a href="/admin/bands/edit/{{ $band->_id }}">Edit</a> |
                            <a href="/admin/bands/delete/{{ $band->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection