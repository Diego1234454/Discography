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
                <h1><b>Albums</b></h1>
                <div class="row">
                        @foreach($albums as $album)
                        <div class="card col-md-6">
                            <!-- <img src="..." class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title"><b>Name: </b> {{ $album->Album }}</h5>
                                <h5 class="card-text"><b> Artist:</b> {{ $album->Artist }}</h5>
                                <h5 class="card-text"><b> Year: </b> {{ $album->Year." "}}</h5>

                                <!-- <a href="/discography/{{ $album->_id }}" class="btn btn-primary">View</a> -->
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-12 ">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mx-auto" role="group" aria-label="First group">
                                    @php 
                                        $cpage = request('pg') == 0 ? 1 : request('pg');
                                    @endphp

                                    <a href ="/discography?pg={{ $cpage - 1 }}" class="btn btn-secondary {{ $cpage == 1 ? 'disabled' : '' }}">&lt</a>
                                    @for ($i = 1; $i <= ceil($albumCount/52); $i++)
                                    <a href="/discography?pg={{$i}}" class="btn btn-secondary {{ $cpage == $i ? 'disabled' : ''}}">{{$i}}</a>
                                    @endfor
                                    <a href="/discography?pg={{ $cpage + 1}}" class="btn btn-secondary {{$cpage == ceil($albumCount/12) ? 'disabled' : '' }}">&gt</a>
                                </div>
                          </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
@endsection