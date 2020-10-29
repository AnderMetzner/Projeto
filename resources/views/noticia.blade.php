<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleiragem</title>
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
<style>

body {
  background-color: rgba(237,237,237);
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


<h2><u><em>{{$noticia['titulo']}}</em></u></h2>
{{$noticia['conteudo']}}


</body>
</html>