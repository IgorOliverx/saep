<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = ['id_usuario', 'descricao', 'setor', 'prioridade', 'status', 'data_cadastro'];

    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
