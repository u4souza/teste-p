<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
   protected $filable = [
    'nome',
    'cpf',
    'data',
    'telefone',
    'email',
    'cep',
    'logradouro',
    'cidade',
    'numero'
   ];
}
