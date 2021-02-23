@extends('layouts.main')

@section('title', 'Adicionar um Anime')

@section('content')

    <div class="container-fluid" style="color: black; background-color: white; padding-bottom: 2rem;">
        <div id="event-create-container" class="col-md-6 offset-md-3">

            <h1>Adicionar um Anime</h1>
            @if (session('msg'))
                <div class="alert alert-danger" role="alert">
                    {{ session('msg')}}
                </div>
            @endif
            <form action="/animes" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-4">
                    <label for="video" class="input-group-text">upload Video:</label>
                    <input type="file" id="video" name="video" class="form-control" accept="video/*">
                </div>

                <div class="input-group mb-3">
                    <label for="image" class="input-group-text">upload Preview:</label>
                    <input type="file" id="image" name="image" class="form-control" accept="image/*">
                </div>

                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
                </div>

                <div class="form-group">
                    <label for="title">Descrição</label>
                    <textarea name="description" id="description" class="form-control"
                        placeholder="O que vai acontecer no evento?" value="!"></textarea>
                </div>

                <input type="submit" class="btn btn-primary" value="Adicionar" style="margin-top: 10px;">
            </form>
        </div>
    </div>

@endsection
