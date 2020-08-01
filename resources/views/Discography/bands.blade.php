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
            <div class="col-md-12">
                <h1><b>Bands</b></h1>
                <div class="row">
                        @foreach($bands as $band)
                        <div class="card col-md-6">
                            <!-- <img src="..." class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title"> <b> Band Name: </b> {{ $band->band_name }}</h5>
                                <!-- <h5 class="card-text"><b>Origin: </b>{{ $band->origin }}</h5> -->
                                <h5 class="card-text"><b>Formed: </b>{{ $band->formed." "}}</h5>
                                <!-- <a href="/discography/bands/{{ $band->_id }}" class="btn btn-primary">View</a> -->
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-12 ">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mx-auto" role="group" aria-label="First group">
                                    @php 
                                        $cpage = request('pg') == 0 ? 1 : request('pg');
                                    @endphp

                                    <a href ="/discography/bands?pg={{ $cpage - 1 }}" class="btn btn-secondary {{ $cpage == 1 ? 'disabled' : '' }}">&lt</a>
                                    @for ($i = 1; $i <= ceil($bandCount/520); $i++)
                                    <a href="/discography/bands?pg={{$i}}" class="btn btn-secondary {{ $cpage == $i ? 'disabled' : ''}}">{{$i}}</a>
                                    @endfor
                                    <a href="/discography/bands?pg={{ $cpage + 1}}" class="btn btn-secondary {{$cpage == ceil($bandCount/12) ? 'disabled' : '' }}">&gt</a>
                                </div>
                          </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
@endsection