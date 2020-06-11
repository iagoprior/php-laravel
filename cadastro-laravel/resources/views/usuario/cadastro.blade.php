@extends('layout.base')

@section('titulo', 'Cadastro de usuário')

@section('conteudo')
    <form action="{{route('salvar')}}" method="post">
        {{csrf_field()}}

        <div class="field">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome"/>
        </div>

        <div class="field">
            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email"/>
        </div>

        <div class="field">
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha"/>
        </div>

        <div class="submit">
            <button type="submit">Salvar</button>
        </div>
    </form>

@endsection