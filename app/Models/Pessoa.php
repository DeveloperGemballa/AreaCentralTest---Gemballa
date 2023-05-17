<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    public static function salvarPessoa($nome, $cpf) {
        $pessoas = new Pessoa();
        $pessoas->nome = $nome;
        $pessoas->cpf = $cpf;
        $pessoas->save();
        return $pessoas->id;
    }
}
