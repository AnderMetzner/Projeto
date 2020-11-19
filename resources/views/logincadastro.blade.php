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
  margin: 4px 20px;
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

div {
  border: 5px lightblue groove;
  border-radius: 8px;
  width: 300px;
  height: 22px;
}

</style>

<body>

@if (Session::has('usuario'))
  {{ Session::get('usuario')->nome }}
@endif

<center>
<form method="POST" action="checklogin">
@csrf

<input type="email" name="email">
<input type="password" name="senha">

<button type="submit">Cadastrar</button>

</form>
</center>


<center>
<a href="/"><button>Home</button></a>
</center>


<form method="POST" action="chamaFuncao">
@csrf

<style>
div.c {
  text-align: right;
}
</style>

<center>
<div class="c">
Nome:
<input type="text" name="nome">
</div>
</center>

<center>
<div class="c">
Senha:
<input type="password" name="senha">
</div>
</center>

<center>
<div class="c">
Email:
<input type="email" name="email">
</div>
</center>

<center>
<div class="c">
Data de nascimento:
<input type="date" name="data_nascimento">
</div>
</center>

<center>
<div class="c">
Telefone:
<input type="number" name="telefone">
</div>
</center>

<center>
<button type="submit">Cadastrar</button>
</center>

<center>
<img src="/img/bolei.png" alt="boleiragem" style="width:30%">
</center>


</form>
</body>

</head>
</html>