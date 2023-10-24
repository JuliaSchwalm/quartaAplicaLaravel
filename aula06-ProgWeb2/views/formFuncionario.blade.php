@extends('template')
@section('titulo')
 Cadastro de Funcionario
@stop
@section('conteudo')
 <a href="\" class="botao-voltar"><img src= "{{asset('botao-voltar.png')}}"alt="Voltar"></a>
<form action = "{{route ('formularioFuncionario')}}" method = "post">
        @csrf 
        <legend>Cadastrar Funcionário:</legend>   <br>
        <label>Nome do Funcionário:<br><input type="text" name="nome" required maxlength="20" /></label><br>
        <label>CPF:<br><input type="text" name="cpf" required maxlength="20" /></label><br>
        <label>Setor:<br><input type="text" name="setor" required maxlength="20" /></label><br><br>
        <input type="submit" name="enviar" value="Enviar">  </a>
     </form>
@stop

