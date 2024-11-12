@extends('master')

@section('content')


    <div class="cont" style="width: 80%; margin:auto; text-align: center; display: flex; justify-content: center">
        @if(session()->has('message'))
            {{session()->get('message')}}
        @endif
    </div>


    <div class="container" style="width: 80%; margin: auto; text-align: center;">
        <h2 style="margin-bottom: 20px;">Lista de Tarefas</h2>
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px;">Descrição</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Setor</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Prioridade</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Status</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Data de Cadastro</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Usuário</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Editar</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Deletar</th>
            </tr>
            </thead>
            <tbody>
            @forelse($tarefas as $tarefa)
                <tr>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $tarefa->descricao }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $tarefa->setor }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $tarefa->prioridade }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $tarefa->status }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $tarefa->data_cadastro }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $tarefa->usuario->name }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">
                        <a href="{{ route('tarefas.edit', $tarefa->id) }}" style="color: blue;">Editar</a>
                    </td>
                    <td style="border: 1px solid #ddd; padding: 8px;">
                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="color: red; background: none; border: none; cursor: pointer;">Deletar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" style="border: 1px solid #ddd; padding: 8px;">Nenhuma tarefa encontrada</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
