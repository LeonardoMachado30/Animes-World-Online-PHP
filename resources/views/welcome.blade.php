@extends('layouts.main')

@section('title', 'Animes World')

@section('content')

    <div class="row">
        <div class="img-custom-top">Animes World Online</div>
    </div>

    <div class="container-fluid top-card" style="text-overflow: ellipsis;overflow: hidden;">
        <div class="row row-cols-2 row-cols-md-4 g-2">
            @foreach ($events as $event)
                <div class="col">
                    <a href="/animes/{{ $event->id }}" style="text-decoration:none; ">
                        <div class="card card-custom">
                            <img src=" image/{{ $event->image }}" class="card-img-top img-custom-card"
                                alt="{{ $event->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->description }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
