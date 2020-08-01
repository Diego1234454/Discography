@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>incomings</h1>
                <a class="text-right" href="/admin/incommings/create">Create New incoming</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Incomming Name</th>
                        <th scope="col">Artist</th>
                        <th scope="col">Year</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($IncomingA as $incoming)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $incoming->release_name}}</td>
                        <td>{{ $incoming["musician_name"] }}</td>
                        <td>{{ $incoming->release_year." "}}</td>
                        <td>
                            <a href="/admin/incommings/{{ $incoming->_id }}">Details</a> |
                            <a href="/admin/incommings/edit/{{ $incoming->_id }}">Edit</a> |
                            <a href="/admin/incommings/delete/{{ $incoming->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection