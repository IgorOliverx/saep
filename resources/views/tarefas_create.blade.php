

@extends('master')


@section('content')



    <div class="cont" style="width: 80%; margin:auto; text-align: center; display: flex; justify-content: center">
        @if(session()->has('message'))
            {{session()->get('message')}}
        @endif
    </div>


    <form action="{{route('tarefas.store')}}" method="post" class="form form-user">
        <h2 style="width: 100%; text-align: center">Cadastrar Tarefa</h2>
        @csrf
        <div class="containerForm">
            <input type="text" name="descricao" id="descricao" placeholder="Descrição" required>
            <input type="text" name="setor" id="setor" placeholder="Setor" required>
            <label for="id_usuario" style="font-size: 12px; color: gray; width: 100%; margin-left: 43px; margin-bottom: -10px;">Usuário</label>
            <select name="id_usuario" style="width: 120px; margin-left: 42px" required>
                @forelse($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @empty
                    <option value="">Nenhum Usuário</option>
                @endforelse
            </select>
            <label for="prioridade" style="font-size: 12px; color: gray; width: 100%; margin-left: 43px; margin-bottom: -10px;">Prioridade</label>
            <select name="prioridade" style="width: 120px; margin-left: 42px" required>
                <option value="baixa">Baixa</option>
                <option value="media">Média</option>
                <option value="alta">Alta</option>
            </select>
        </div>
        <button type="submit">Criar</button>
    </form>


@endsection
