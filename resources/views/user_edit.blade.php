@extends('master')


@section('content')


    <h2>Editar</h2>

    @if(session()->has('message'))
        {{session()->get('message')}}
    @endif

    <form action="{{route('users.update', ['user' => $user->id])}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="name" id="name" value="{{$user->name}}" required>
        <input type="email" name="email" id="email" value="{{$user->email}}" required>
        <button type="submit">Atualizar</button>
    </form>


@endsection
