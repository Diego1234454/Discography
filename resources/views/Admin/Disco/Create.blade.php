@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create New Album</h1>
                <form action="/admin/disco/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="Album">Album Name</label>
                        <input class="form-control" type="text" name="Album" id="Album">
                    </div>
                    <!-- <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="0">Select a category...</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->_id }}">{{ $category->Category}}</option>
                            @endforeach
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label for="Artist">Artist</label>
                        <textarea name="Artist" id="Artist" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Year">Year</label>
                            <input type="number" name="Year" id="Year" class="form-control">
                        </div>
                        <!-- <div class="form-group col-md-6">
                            <label for="currency">Currency</label>
                            <select name="currency" id="currency" class="form-control">
                                <option value="0">Select a currency...</option>
                                <option value="MXN">Mexican Peso (MXN)</option>
                                <option value="USD">American Dolar (USD)</option>
                            </select>
                        </div> -->
                    </div>
                    <button type="submit" class="btn btn-success">Create</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
