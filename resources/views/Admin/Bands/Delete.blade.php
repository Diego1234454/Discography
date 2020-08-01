@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete band</h1>
                <form action="/admin/bands/delete" method= "POST">
                @csrf
                @method('DELETE')
                    <input type="hidden" name="bandid" id="bandid" value="{{ $bands->_id }}">
                <div class="form-group">
                    <label for="band_name">Band Name</label>
                    <input class="form-control" type="text" name="band_name" id="band_name" value="{{ $bands->band_name}}" disabled>
                </div>
                <div class="form-group">
                    <label for="formed">Formed</label>
                    <textarea name="formed" id="formed" cols="30" rows="10" class="form-control" disabled>{{ $bands->formed }}</textarea>
                </div>
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection