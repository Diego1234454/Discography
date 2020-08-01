@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Band Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $bands->band_name}}</b></h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Formed: </b> {{ $bands->formed." "}}</li>
                    </ul>

                    <div class="card-body">
                        <a href="/admin/bands/edit/{{ $bands->_id }}"class="card-link">Edit</a>
                        <a href="/admin/bands/delete/{{ $bands->_id }}" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
