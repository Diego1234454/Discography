@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create New Incomming</h1>
                <form action="/admin/incommings/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="release_name">Incoming Name</label>
                        <input class="form-control" type="text" name="release_name" id="release_name">
                    </div>
                    <div class="form-group">
                        <label for="musician_name">Artist</label>
                        <textarea name="musician_name" id="musician_name" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="release_year">Year</label>
                            <input type="number" name="release_year" id="release_year" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Create</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
