@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create New Band</h1>
                <form action="/admin/bands/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="band_name">Band Name</label>
                        <input class="form-control" type="text" name="band_name" id="band_name">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="formed">Formed</label>
                            <input type="number" name="formed" id="formed" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Create</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
