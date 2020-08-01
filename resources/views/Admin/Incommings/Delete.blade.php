@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete incoming</h1>
                <form action="/admin/incommings/delete" method= "POST">
                @csrf
                @method('DELETE')
                    <input type="hidden" name="incomingid" id="incomingid" value="{{ $incoming->_id }}">
                <div class="form-group">
                    <label for="release_name">incoming Name</label>
                    <input class="form-control" type="text" name="release_name" id="release_name" value="{{ $incoming->release_name}}" disabled>
                </div>
                <div class="form-group">
                    <label for="musician_name">Artist</label>
                    <textarea name="musician_name" id="musician_name" cols="30" rows="10" class="form-control" disabled>{{ $incoming->musician_name }}</textarea>
                </div>
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection