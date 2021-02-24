@extends('layouts.main')

@section('title', 'Animes')

@section('content')

    <div class="container-sm">
            <div class="row ">
                <div class="col-5">
                    <h1>{{ $animes->title }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <video src="/video/{{ $animes->video }}" controls class="custom-video"></video>
                </div>
            </div>
        </div>
    </div>

@endsection
