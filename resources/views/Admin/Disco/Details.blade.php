@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>album Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $album->Album}}</b></h4>
                        <p class="card-text"><b>Artist: </b> {{ $album->Artist }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Year: </b> {{ $album->Year." "}}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/disco/edit/{{ $album->_id }}"class="card-link">Edit</a>
                        <a href="/admin/disco/delete/{{ $album->_id }}" class="card-link">Delete</a>
                        <a href="/admin/disco/" class="card-link">Go back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
