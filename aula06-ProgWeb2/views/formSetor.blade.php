@extends('template')
@section('titulo')
 Cadastro do Setor
@stop
@section('conteudo')
<div id = "index">
 <a href="\" class="botao-voltar"><img src= "{{asset('botao-voltar.png')}}"alt="Voltar"></a>
<form action = "{{route ('formularioSetor')}}" method = "post">
        @csrf 
        <legend>Cadastrar setor:</legend>   <br>
        <label>Nome do setor:<br><input type="text" name="nome" required /></label><br>
        <label>Atividade principal:<br><input type="text" name="atividade" required /></label><br><br>
        <input type="submit" name="enviar" value="Enviar">  </a>

     </form>
</div>
@stop