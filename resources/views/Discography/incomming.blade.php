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
                <h1><b>Incomings</b></h1>
                <div class="row">
                        @foreach($incoming as $incomingN)
                        <div class="card col-md-6">
                            <!-- <img src="..." class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title"> <b> Incoming Name: </b> {{ $incomingN->release_name }}</h5>
                                <h5 class="card-text"><b>Origin: </b>{{ $incomingN->musician_name }}</h5>
                                <h5 class="card-text"><b>Formed: </b>{{ $incomingN->release_year." "}}</h5>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-12 ">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mx-auto" role="group" aria-label="First group">
                                    @php 
                                        $cpage = request('pg') == 0 ? 1 : request('pg');
                                    @endphp

                                    <a href ="/discography/incomming?pg={{ $cpage - 1 }}" class="btn btn-secondary {{ $cpage == 1 ? 'disabled' : '' }}">&lt</a>
                                    @for ($i = 1; $i <= ceil($inCount/900); $i++)
                                    <a href="/discography/incomming?pg={{$i}}" class="btn btn-secondary {{ $cpage == $i ? 'disabled' : ''}}">{{$i}}</a>
                                    @endfor
                                    <a href="/discography/incomming?pg={{ $cpage + 1}}" class="btn btn-secondary {{$cpage == ceil($inCount/12) ? 'disabled' : '' }}">&gt</a>
                                </div>
                          </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
@endsection