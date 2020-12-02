@extends('layout')
@section('pagina')

<h1 style="text-align:center;"><em><u>Notícias</u></em></h1>

<form method="POST" action="updateNoticia">
  @csrf

<center>
<h2><u><em>{{$noticia['titulo']}}</em></u></h2>
</center>

{{$noticia['conteudo']}}

</form>
<hr>

<form method="POST" action="/updateNoticia">
@csrf

<center>
<input type="hidden" name="id_noticia" value="{{ $noticia['id_noticia'] }}">
<input placeholder="titulo" type="text" name="titulo" value="{{$noticia['titulo']}}">
<input placeholder="fonte" type="text" name="fonte" value="{{$noticia['fonte']}}">
<input placeholder="conteudo" type="text" name="conteudo" value="{{$noticia['conteudo']}}">
</center>

<center>
<button type="submit">Publicar</button>
</center>
</form>


@endsection