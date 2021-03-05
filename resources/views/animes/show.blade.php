@extends('layouts.main')

@section('title', "$animes->title")

@section('content')

    <div class="container">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 g-2 my-2">
            <div class="col">
                <div class="card shadow-sm video-custom-div">
                    <p class="card-text text-custom-show">{{ $animes->title }}</p>
                    <video src="/video/{{ $animes->video }}" class="video-custom" controls></video>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <p>Descrição:</p>
                            <small class="text-muted">
                                Adicionado em:
                                {{ date('d/m/Y', strtotime($animes->created_at)) }}
                            </small>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>{{ $animes->description }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>

@endsection
