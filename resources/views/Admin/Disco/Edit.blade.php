@extends('layouts.admin')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit album</h1>
                <form action="/admin/disco/edit" method= "POST">
                @csrf
                <input type="hidden" name="albumid" id="albumid" value="{{ $album->_id }}">
                <div class="form-group">
                    <label for="Album">album Name</label>
                    <input class="form-control" type="text" name="Album" id="Album" value="{{ $album->Album }}">
                </div>
                <div class="form-group">
                    <label for="Year">Year</label>
                    <input class="form-control" type="text" name="Year" id="Year" value="{{ $album->Year }}">
                </div>

                <div class="form-group">
                    <label for="Artis">Artist</label>
                    <input class="form-control" type="text" name="Artist" id="Artist" value="{{ $album->Artist }}">
                </div>


                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection