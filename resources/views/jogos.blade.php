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
   <a href="/noticias"><button>Notícias</button></a>
   <a href="/jogos"><button>Jogos</button></a>
</center>
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

<center>
@foreach ($jogos as $val)
<br>

  <b>{{ $val['nome_time']}}</b><br>
  <b>{{$val['resultado']}}</b><br>

</br>
@endforeach
</center>


</body>
</html>