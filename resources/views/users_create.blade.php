@extends('master')


@section('content')



    <div class="cont" style="width: 80%; margin:auto; text-align: center; display: flex; justify-content: center">
        @if(session()->has('message'))
            {{session()->get('message')}}
        @endif
    </div>


    <form action="{{route('users.store')}}" method="post" class="form form-user">
        <h2 style="width: 100%; text-align: center">Cadastrar Usuário</h2>
        @csrf
        <div class="containerForm">
            <input type="text" name="name" id="name" placeholder="Seu nome" required>
            <input type="email" name="email" id="email" placeholder="Seu email" required>
        </div>
        <button type="submit">Criar</button>
    </form>


@endsection
