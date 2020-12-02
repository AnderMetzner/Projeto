@extends('layout')
@section('pagina')

<hr>

<center>
  <img src="/img/brsa.jpg" alt="brasileirao2020" style="width:30%"/>
</center>
<hr>

<form method="POST" action="cadastrojogo">
@csrf

<center>
  <input placeholder="nome dos times" type="text" name="nome_time">
</center>

<center>
  <input placeholder="resultado" type="text" name="resultado">
</center>
<center>
<button type="submit">Publicar</button>
</center>
</form>

<!-- <center>
@foreach ($jogos as $val)
<br>

  <b>{{ $val['nome_time']}}</b><br>
  <b>{{$val['resultado']}}</b><br>

</br>
@endforeach
</center> -->
<center>
@foreach ($jogos as $val)
<br>

  <b>{{ $val['nome_time']}}</b><br>

  <a href="jogo/{{$val['id_jogos']}}"> 
ver publicacao
  </a>
<hr>
</br>
@endforeach
</center>

@endsection