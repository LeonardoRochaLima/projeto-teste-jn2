<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Veiculo;

class Cliente extends Model
{
    protected $fillable = ['nome', 'telefone', 'cpf'];

    /**
     * Função responsável por fazer o relacionamento entre o veiculo e o cliente.
     * @return void
     */
    public function veiculos()
    {
        return $this->hasMany(Veiculo::class,"id_cliente", "id");
    }
}
