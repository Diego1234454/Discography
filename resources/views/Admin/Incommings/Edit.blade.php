@extends('layouts.admin')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit incoming</h1>
                <form action="/admin/incommings/edit" method= "POST">
                @csrf
                <input type="hidden" name="incomingid" id="incomingid" value="{{ $incoming->_id }}">
                <div class="form-group">
                    <label for="release_name">Incoming Name</label>
                    <input class="form-control" type="text" name="release_name" id="release_name" value="{{ $incoming->release_name }}">
                </div>
                <div class="form-group">
                    <label for="release_year">Year</label>
                    <input class="form-control" type="text" name="release_year" id="release_year" value="{{ $incoming->release_year }}">
                </div>

                <div class="form-group">
                    <label for="musician_name">Artist</label>
                    <input class="form-control" type="text" name="musician_name" id="musician_name" value="{{ $incoming->musician_name }}">
                </div>


                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection