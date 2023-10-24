@extends('template')
@section('titulo')
 Lista de setores
@stop
@section('conteudo')
 <a href="\" class="botao-voltar"><img src= "{{asset('botao-voltar.png')}}"alt="Voltar"></a>
    <div class="lista">
    <h1>Lista de Setores</h1>

    <table>
              <tr>
           <th>ID</th>
            <th>Setor</th>
             <th>Atividade</th>
        </tr>
          @foreach($setores as $setor)
        <tr>
           <td>{{$setor -> id}}</td>
            <td>{{$setor -> nome}}</td>
             <td>{{$setor -> atividade}}</td>
        </tr>

      @endforeach
            </table>
          </div>
@stop