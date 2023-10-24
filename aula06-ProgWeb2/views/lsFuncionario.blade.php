@extends('template')
@section('titulo')
 Lista de Funcionários
@stop
@section('conteudo')
 <a href="\" class="botao-voltar"><img src= "{{asset('botao-voltar.png')}}"alt="Voltar"></a>
    <div class="lista">
   <h1>Lista de funcionários cadastrados</h1>

   @foreach($funcionarios as $funcionario)
    @if($loop->first || $funcionario->setor->id != $funcionarios[$loop->index - 1]->setor->id)
  <h2> SETOR: {{$funcionario-> setor -> nome}}</h2>
  <table>
    <tr> 
        <th>Nome</th>
         <th>CPF</th>
    </tr>
     @endif
    <tr>
      <td> {{$funcionario ->nome}}</td>
      <td>{{$funcionario ->cpf}}</td>
    </tr>
     @if($loop->last || $funcionario->setor->id != $funcionarios[$loop->index + 1]->setor->id)
  </table>
  @endif

  @endforeach
</div>
@stop