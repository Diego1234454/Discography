@extends('layouts.app')

@section('content')

<html>
    <head>
         <style>
            html, body {
                background-color: #FFB6C1;
                color: #636b6f;
                font-family: 'Nunito', arial;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>

    </head>
</html>

    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                    <div class="card-body">
                    <h5 class="card-title"><b> band Name: </b> {{ $bandM->band_name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted"> <b> Origin:</b> {{ $bandM->origin }}</h6>
                    <p class="card-text"><b> Genre: </b> {{ $bandM->style }}</p>
                    <!-- <p class="card-text"><b> Subgenre: </b> {{ $bandM->Subgenre }}</p>
                    <p class="card-text"><b> Year: </b> {{ $bandM->Year }}</p> -->
                </div>
                <div class="card-footer">
                    <p>Rating:</p>
                    <input type="radio" name="rating" id="rating">&nbsp1 </input>
                    <input type="radio" name="rating" id="rating">&nbsp2 </input>
                    <input type="radio" name="rating" id="rating">&nbsp3 </input>
                    <input type="radio" name="rating" id="rating">&nbsp4 </input>
                    <input type="radio" name="rating" id="rating">&nbsp5 </input>
                </div> 
            </div>
            <a href="/discography/" class="card-link"> <br>&nbsp&nbsp&nbsp&nbsp&nbsp <b> Go back </b> </br> </a>

        </div>
    </div>
@endsection