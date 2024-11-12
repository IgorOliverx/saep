@extends('master')

@section('content')

    <div class="cont" style="width: 80%; margin:auto; text-align: center; display: flex; justify-content: center">
        @if(session()->has('message'))
            {{session()->get('message')}}
        @endif
    </div>

    <div class="container" style="width: 80%; margin: auto; text-align: center;">
        <h2 style="margin-bottom: 20px;">Lista de Tarefas</h2>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 30%; border: 1px solid #ddd; padding: 10px;">
                <h3>A Fazer</h3>
                @foreach($tarefas->where('status', 'a fazer') as $tarefa)
                    <div style="border: 1px solid #ddd; padding: 8px; margin-bottom: 10px;">
                        <p><strong>Descrição:</strong> {{ $tarefa->descricao }}</p>
                        <p><strong>Setor:</strong> {{ $tarefa->setor }}</p>
                        <p><strong>Prioridade:</strong> {{ $tarefa->prioridade }}</p>
                        <p><strong>Data de Cadastro:</strong> {{ $tarefa->data_cadastro }}</p>
                        <p><strong>Usuário:</strong> {{ $tarefa->usuario->name }}</p>
                        <a href="{{ route('tarefas.edit', $tarefa->id) }}" style="color: blue;">Editar</a>
                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="color: red; background: none; border: none; cursor: pointer;">Deletar</button>
                        </form>
                    </div>
                @endforeach
            </div>
            <div style="width: 30%; border: 1px solid #ddd; padding: 10px;">
                <h3>Fazendo</h3>
                @foreach($tarefas->where('status', 'fazendo') as $tarefa)
                    <div style="border: 1px solid #ddd; padding: 8px; margin-bottom: 10px;">
                        <p><strong>Descrição:</strong> {{ $tarefa->descricao }}</p>
                        <p><strong>Setor:</strong> {{ $tarefa->setor }}</p>
                        <p><strong>Prioridade:</strong> {{ $tarefa->prioridade }}</p>
                        <p><strong>Data de Cadastro:</strong> {{ $tarefa->data_cadastro }}</p>
                        <p><strong>Usuário:</strong> {{ $tarefa->usuario->name }}</p>
                        <a href="{{ route('tarefas.edit', $tarefa->id) }}" style="color: blue;">Editar</a>
                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="color: red; background: none; border: none; cursor: pointer;">Deletar</button>
                        </form>
                    </div>
                @endforeach
            </div>
            <div style="width: 30%; border: 1px solid #ddd; padding: 10px;">
                <h3>Pronto</h3>
                @foreach($tarefas->where('status', 'pronto') as $tarefa)
                    <div style="border: 1px solid #ddd; padding: 8px; margin-bottom: 10px;">
                        <p><strong>Descrição:</strong> {{ $tarefa->descricao }}</p>
                        <p><strong>Setor:</strong> {{ $tarefa->setor }}</p>
                        <p><strong>Prioridade:</strong> {{ $tarefa->prioridade }}</p>
                        <p><strong>Data de Cadastro:</strong> {{ $tarefa->data_cadastro }}</p>
                        <p><strong>Usuário:</strong> {{ $tarefa->usuario->name }}</p>
                        <a href="{{ route('tarefas.edit', $tarefa->id) }}" style="color: blue;">Editar</a>
                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="color: red; background: none; border: none; cursor: pointer;">Deletar</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
