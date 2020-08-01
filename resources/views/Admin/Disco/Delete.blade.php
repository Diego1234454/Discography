@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete album</h1>
                <form action="/admin/disco/delete" method= "POST">
                @csrf
                @method('DELETE')
                    <input type="hidden" name="albumid" id="albumid" value="{{ $album->_id }}">
                <div class="form-group">
                    <label for="Album">album Name</label>
                    <input class="form-control" type="text" name="Album" id="Album" value="{{ $album->Album}}" disabled>
                </div>
                <div class="form-group">
                    <label for="Artist">Artist</label>
                    <textarea name="Artist" id="Artist" cols="30" rows="10" class="form-control" disabled>{{ $album->Artist }}</textarea>
                </div>
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection