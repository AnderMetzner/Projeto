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
</center>


<form method="POST" action="chamaFuncao">
@csrf

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

@endsection