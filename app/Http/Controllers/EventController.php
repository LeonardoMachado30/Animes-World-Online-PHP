<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Validator as ValidationValidator;
use Symfony\Component\Console\Input\Input;

class EventController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('animes.create');
    }

    public function store(Request $request)
    {
        $event = new Event();

        $array = ['wmv', 'mp4'];

        foreach ($array as $video) {
            # code...
            if ($request->hasfile('video') && $request->file('video')->isValid() or empty($request->title)) 
            {
                foreach ($array as $video) {
                    dd($video);
                    if($request->video->extension() === $video )
                    {
                        dd($video);
                        $event->title = $request->title;
                        $event->description = $request->description;

                        $requestVideo = $request->file('video')->store('videos');
                        
                        $event->image = $requestVideo;

                        $event->save();
                        return redirect('/')->with('msg', 'Anime adicionado com sucesso!');
                    }else{
                        return redirect('/animes/create')->with('msg', 'Formato do arquivo nao e valido!');
                    }
                }

                //$requestVideo = $request->video;

                //$extension = $requestVideo->extension();

                //fazendo uma hash no formato MD5 e tranformando o nome do arquivo de imagem unico
                //$videoName = md5($requestVideo->getClientOriginalName() . Strtotime("now") . "." . $extension);

                //Movendo Imagem para a pasta de imagens
                //$requestVideo->move(public_path('videos/animes'), $videoName);

                //$event->image = $videoName;

                //$event->save();
            } else {
                return redirect('/animes/create')->with('msg', 'campo do upload vazio!');
            }
        }
    }
}
