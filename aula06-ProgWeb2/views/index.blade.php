@extends('template')
@section('titulo')
 Home
@stop
@section('conteudo')
    <h1>Bem-vindo à Página Inicial</h1>

    <a href="/formSetor"><button>Cadastrar Novo Setor</button></a>
    <a href="/formFuncionario"><button>Cadastrar Novo Funcionário</button></a>
    <a href="/lsSetor"><button>Ver Lista de Setores</button></a>
    <a href="/lsFuncionario"><button>Ver Funcionários</button></a>

@stop