<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleiragem</title>
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">

<style>

button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 20px;
}

body {
    background-color: rgba(237,237,237);
}

h1 {
    font-family: arial;
    font-size: 35px;
}

p {
  font-family: verdana;
  font-size: 20px;
}

pre {
  font-family: verdana;
  font-size: 15px;
}


</style>

<h1 style="text-align:center;"><em><u>Jo'gols'</u></em></h1>

</head>

<body>

<center>
   <a href="/"><button>Home</button></a>
</center>

<form method="POST" action="cadastroJogos">
  @csrf

<center>
<h2><u><em>{{$jogo['nome_time']}}</em></u></h2>
<h2><u><em>{{$jogo['resultado']}}</em></u></h2>

</center>

{{$jogo['conteudo']}}

</form>
<hr>

<center>
<img src="/img/placarrod.jpg" alt="placar" style="width:35%">
</center>

<form method="POST" action="/updateJogo">
@csrf

<center>
<input type="hidden" name="id_jogos" value="{{ $jogo['id_jogos'] }}">
<input type="text" name="nome_time" value="{{$jogo['nome_time']}}">
<input type="text" name="resultado" value="{{$jogo['resultado']}}">
</center>

<center>
<button type="submit">Publicar</button>
</center>
</form>

</body>
</html>