@extends('master')

@section('content')

    <div class="container" style="width: 50%; margin: auto; text-align: center;">
        <h2 style="margin-bottom: 20px;">Editar</h2>

        @if(session()->has('message'))
            <div style="margin-bottom: 20px; color: green;">
                {{ session()->get('message') }}
            </div>
        @endif

        <form action="{{ route('tarefas.update', ['tarefa' => $tarefa->id]) }}" method="post" style="display: flex; flex-direction: column; align-items: center;">
            @csrf
            <input type="hidden" name="_method" value="PUT">

            <label for="status" style="margin-bottom: 10px;">Status</label>
            <select name="status" id="status" style="margin-bottom: 20px; padding: 10px; width: 100%;">
                <option value="a fazer" {{ $tarefa->status == 'a fazer' ? 'selected' : '' }}>A Fazer</option>
                <option value="fazendo" {{ $tarefa->status == 'fazendo' ? 'selected' : '' }}>Fazendo</option>
                <option value="pronto" {{ $tarefa->status == 'pronto' ? 'selected' : '' }}>Pronto</option>
            </select>

            <label for="prioridade" style="margin-bottom: 10px;">Prioridade</label>
            <select name="prioridade" id="prioridade" style="margin-bottom: 20px; padding: 10px; width: 100%;">
                <option value="baixa" {{ $tarefa->prioridade == 'baixa' ? 'selected' : '' }}>Baixa</option>
                <option value="media" {{ $tarefa->prioridade == 'media' ? 'selected' : '' }}>Média</option>
                <option value="alta" {{ $tarefa->prioridade == 'alta' ? 'selected' : '' }}>Alta</option>
            </select>

            <button type="submit" style="padding: 10px 20px; background-color: blue; color: white; border: none; cursor: pointer;">Atualizar</button>
        </form>
    </div>

@endsection
