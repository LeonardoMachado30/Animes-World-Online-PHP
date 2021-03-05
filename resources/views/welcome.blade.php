@extends('layouts.main')

@section('title', 'Animes World')

@section('content')

    <header>
        <div>
            <div class="img-custom-top">Animes World Online</div>
        </div>
    </header>

    <main>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                    @foreach ($events as $event)
                        <div class="col">
                            <div class="card shadow-sm">

                                <img src="image/{{ $event->image }}" class="card-img-top img-custom-card"
                                    alt="{{ $event->title }}">

                                <div class="card-body">
                                    <p class="card-text">{{ $event->title }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="animes/{{ $event->id }}"
                                                class="btn btn-sm btn-outline-secondary">View</a>
                                        </div>
                                        <small class="text-muted">
                                            {{ date('d/m/Y', strtotime($event->created_at)) }}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

@endsection
