<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\usuario;

use App\Models\noticias;

use App\Models\jogos;

class HomeController extends Controller
{
    public function funcao (Request $req) {
        $usuario = new usuario();
        $usuario->fill($req->all());
        $usuario->save();
        return $usuario;
    }

    public function loadHome (Request $req) {
        $usuario = usuario::get();
        return view('home', compact('usuario'));
    }

    public function noticiascadastro (Request $req) {
        $noticias = new noticias();
        $req['id_usuario'] = 1;
        $noticias->fill($req->all());
        $noticias->save();
        return redirect('noticias');
    }

    public function loadNoticias (Request $req) {
        $noticias = noticias::get();
        return view('noticias', compact('noticias'));
    }

    public function loadNoticia (Request $req) {
        $noticia = noticias::find($req->id);
        return view('noticia', compact('noticia'));
    }

    public function noticiajogo (Request $req) {
        $jogos = new jogos();
        $jogos->fill($req->all());
        $jogos->save();
        return redirect('jogos');
    }

    public function noticiaJogos (Request $req) {
        $jogos = jogos::get();
        return view('jogos', compact('jogos')); 
    }

    
}