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

<h1 style="text-align:center;"><em><u>Notícias</u></em></h1>

</head>

<body>

<center>
   <a href="/"><button>Home</button></a>
   <a href="noticias"><button>Notícias</button></a>
   <a href="jogos"><button>Jogos</button></a>
</center>
<hr>

<center>
<img src="/img/noticia.jpg" alt="noticias do futebol" style="width:20%">
</center>
<hr>

<center>
<pre>
O futebol é mais do que uma paixão nacional: é uma paixão mundial! Ainda que nós,
brasileiros, quiséssemos que o futebol fosse uma invenção nacional, o mérito de sua criação é da Inglaterra.
Esse esporte ganhou suas formas modernas no final do século XIX.

No Brasil, o futebol se firmou como um esporte de massas: embora houvesse times elitistas,
a grande maioria dos times de futebol que permanece até os dias de hoje se formou a partir
de grupos de trabalhadores ou de estudantes que se reuniam para “jogar bola” no campinho do seu bairro.
</pre>
</center>
<hr>

<center>
<h2><u><em>Notícias da Rodada</em></u></h2>

<form method="POST" action="noticiascadastro">
  @csrf

<center>
  <input placeholder="titulo" type="text" name="titulo">
</center>


<center>
  <input placeholder="referencias" type="text" name="referencias">
</center>

<center>
  <input placeholder="fonte" type="text" name="fonte">
</center>

<center>
  <input placeholder="placares" type="text" name="placares">
</center>

<center>
  <input placeholder="data publicacão" type="date" name="data_publicacao">
</center>

<center>
  <input placeholder="conteudo" type="text" name="conteudo">
</center>

  <button type="submit">Publicar</button>
</form>

</center>
<hr>

<center>
@foreach ($noticias as $val)
<br>

  <b>{{ $val['conteudo']}}</b><br>

  <a href="noticia/{{$val['id_noticia']}}"> 
ver publicacao
  </a>
<hr>
</br>
@endforeach
</center>

</body>
</html>