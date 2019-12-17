<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
  protected $fillable = ['cpf', 'nome', 'endereco', 'estado', 'municipio', 'telefone', 'email', 'senha'];
}
