<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {

        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function create()
    {
        return view('animes.create');
    }

    public function store(Request $request)
    {
        $event = new Event();
        # code...
        if ($request->hasfile('video') && $request->file('video')->isValid() or empty($request->title)) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            //fazendo uma hash no formato MD5 e tranformando o nome do arquivo de imagem unico
            $imageName = md5($requestImage->getClientOriginalName() . Strtotime("now") . "." . $extension);
            //Movendo Imagem para a pasta de imagens
            $requestImage->move(public_path('image'), $imageName);

            $requestVideo = $request->video;
            $extension = $requestVideo->extension();
            //fazendo uma hash no formato MD5 e tranformando o nome do arquivo de video unico
            $videoName = md5($requestVideo->getClientOriginalName() . Strtotime("now") . "." . $extension);
            //Movendo video para a pasta de imagens
            $requestVideo->move(public_path('video'), $videoName);

            $event->image = $imageName;
            $event->video = $videoName;
            $event->title = $request->title;
            $event->description = $request->description;

            $event->save();

            return redirect('/')->with('msg', 'Anime adicionado com sucesso!');
        } else {
            return redirect('/animes/create')->with('msg', 'Formato do arquivo nao e valido!');
        }
    }

    public function show($id)
    {
        $animes = Event::findOrFail($id);

        return view('animes.show', ['animes' => $animes]);
    }
}
