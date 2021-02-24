@extends('layouts.main')

@section('title', 'Animes World')

@section('content')


    <div class="row">
        <div class="img-custom-top">Animes World Online</div>
    </div>

    <div class="container top-card">
        <div class="row row-cols-4 row-cols-md-4 g-2">
            @foreach ($events as $event)
                <div class="col">
                    <a href="/animes/{{ $event->id }}">
                        <div class="card card-custom">
                            <img src=" image/{{ $event->image }}" class="card-img-top img-custom-card"
                                alt="{{ $event->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->title }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
