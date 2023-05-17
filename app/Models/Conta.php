<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pessoa;

class Conta extends Model
{
    use HasFactory;

    public function titular() {
        return $this->belongsTo(Pessoa::class, 'titular_id');
    }
    public static function salvarConta($titular, $saldo) {
        $conta = new Conta();
        $conta->titular_id = $titular;
        $conta->saldo = $saldo;
        $conta->save();
        return $conta->id;
    }
}
