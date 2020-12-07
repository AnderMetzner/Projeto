<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\usuario;

use App\Models\noticias;

use App\Models\jogos;

use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function funcao (Request $req) {
        $usuario = new usuario();
        $usuario->fill($req->all());
        $usuario['senha'] = Hash::make($usuario['senha']);
        $usuario->save();
        return $usuario;
    }

    public function loadHome (Request $req) {
        $usuario = usuario::get();
        return view('home', compact('usuario'));
    }

    public function checklogin (Request $req) {
        $user = usuario::where('email', $req['email'])->first();
        if(Hash::check($req['senha'], $user['senha'])) {
            $req->session()->put('usuario', $user);
            return redirect('/');
        }
        return redirect('/logincadastro');
    }

    public function noticiascadastro (Request $req) {
        $noticias = new noticias();
        $noticias->fill($req->all());
        $noticias['id_usuario'] = $req->session()->get('usuario')->id_usuario;
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

    public function updateNoticia (Request $req) {
        $noticias = noticias::find($req['id_noticia']);
        $noticias['titulo'] = $req['titulo'];
        $noticias['fonte'] = $req['fonte'];
        $noticias['conteudo'] = $req['conteudo'];
        $noticias->save();
        return redirect('noticia/' . $req['id_noticia']);
    }
     
    public function cadastroJogos (Request $req) {
        $jogos = new jogos();
        $jogos->fill($req->all());
        $jogos->save();
        return redirect('jogos');
    }

    public function noticiaJogos (Request $req) {
        $jogos = jogos::get();
        return view('jogos', compact('jogos')); 
    }

    public function noticiaJogo (Request $req) {
        $jogo = jogos::find($req->id);
        return view('jogo', compact('jogo'));
    }

    public function updateJogo (Request $req) {
        $jogos = jogos::find($req->id_jogos);
        $jogos->nome_time = $req->nome_time;
        $jogos->resultado = $req->resultado;
        $jogos->save();
        return redirect('jogo/' . $req['id_jogos']);
    }

    public function sair (Request $req) {
        $req->session()->flush();
        return redirect('/');
    }

    public function id (Request $req) {
        $req->session()->get('usuario')->id;
    }

    public function deleteNoticia ($id) {
        $noticia = noticia::find($id)->delete();
        return redirect('noticias');
    }

}