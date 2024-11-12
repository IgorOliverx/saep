<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TarefaController extends Controller
{

    public readonly Tarefa $tarefa;

    public function __construct(){
        $this->tarefa = new Tarefa();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarefas = $this->tarefa->with('usuario')->get();
        return view('tarefas', ['tarefas' => $tarefas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('tarefas_create',['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->tarefa->create([
            'id_usuario' => $request->id_usuario,
            'descricao' => $request->descricao,
            'setor' => $request->setor,
            'prioridade' => $request->prioridade,
            'status' => 'a fazer',
            'data_cadastro' => Carbon::now(),
        ]);

        if($created){
            return redirect()->back()->with(['message' => 'Tarefa criada com sucesso']);
        }
        return redirect()->back()->with(['message' => 'Falha ao criar tarefa']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarefa $tarefa)
    {
        return view('tarefa_show', ['tarefa' => $tarefa]);
    }
    public function edit(string $id)
    {
        $tarefa = $this->tarefa->findOrFail($id);
        return view('tarefas_edit', ['tarefa' => $tarefa]);
    }

    public function update(Request $request, string $id)
    {
        $tarefa = $this->tarefa->findOrFail($id);

        $tarefa->status = $request->input('status');
        $tarefa->prioridade = $request->input('prioridade');

        if ($tarefa->save()) {
            return redirect()->back()->with('message', 'Tarefa atualizada com sucesso');
        }

        return redirect()->back()->with('message', 'Erro ao atualizar tarefa');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->tarefa->where('id', $id)->delete();


        return redirect()->back()->with('message', 'Tarefa deletada com sucesso');
    }
}
