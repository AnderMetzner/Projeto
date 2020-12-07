@extends('layout')
@section('pagina')

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
<hr>


<form method="POST" action="chamaFuncao">
@csrf

<div class="c">
Nome:
<input placeholder="nome" type="text">
</div>

<div class="c">
Senha:
<input placeholder="senha" type="password">
</div>

<div class="c">
Email:
<input placeholder="email" type="email">
</div>

<div class="c">
Data de nascimento:
<input placeholder="data de nascimento" type="date">
</div>

<div class="c">
Telefone:
<input placeholder="telefone" type="number">
</div>

<button  type="submit">Cadastrar</button>

<center>
<img src="/img/bolei.png" alt="boleiragem" style="width:30%">
</center>
<hr>

</form>

@endsection