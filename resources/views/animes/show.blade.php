@extends('layouts.main')

@section('title', 'Animes')

@section('content')

    <div class="container-sm">
        <div class="box-show">
            <div class="row ">
                <div class="col1">
                    <h1>{{ $animes->title }}</h1>
                </div>
            </div>
                <video src="/video/{{ $animes->video }}" controls class="custom-video"></video>
        </div>
    </div>


@endsection
