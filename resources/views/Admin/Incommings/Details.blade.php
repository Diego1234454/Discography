@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>incoming Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $incoming->release_name}}</b></h4>
                        <p class="card-text"><b>Artist: </b> {{ $incoming->musician_name }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Year: </b> {{ $incoming->release_year." "}}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/incommings/edit/{{ $incoming->_id }}"class="card-link">Edit</a>
                        <a href="/admin/incommings/delete/{{ $incoming->_id }}" class="card-link">Delete</a>
                        <a href="/admin/incommings/" class="card-link">Go back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
