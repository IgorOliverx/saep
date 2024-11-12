@extends('master')


@if(session()->has('message'))
{{session()->get('message')}}
@endif



@section('content')
    <a href="{{route('users.create')}}">Criar usuário</a>
    <hr>
    <h2>Usuários</h2>

<ul>
    @foreach($users as $user)
        <li>{{$user->name}} -- {{$user->email}} | <a href="{{route('users.edit',['user' => $user->id] )}}">Editar</a> |
            <a href="{{route('users.show', ['user' => $user->id])}}">Mostrar</a></li>
    @endforeach
</ul>

@endsection
