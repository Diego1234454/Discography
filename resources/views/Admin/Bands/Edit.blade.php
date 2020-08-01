@extends('layouts.admin')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Band</h1>
                <form action="/admin/bands/edit" method= "POST">
                @csrf
                <input type="hidden" name="bandid" id="bandid" value="{{ $bands->_id }}">
                <div class="form-group">
                    <label for="band_name">Band Name</label>
                    <input class="form-control" type="text" name="band_name" id="band_name" value="{{ $bands->band_name }}">
                </div>
                <div class="form-group">
                    <label for="formed">formed</label>
                    <input class="form-control" type="text" name="formed" id="formed" value="{{ $bands->formed }}">
                </div>

                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection