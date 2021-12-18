<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class Veiculo extends Model
{   
    protected $fillable = ['id_cliente', 'nome_cliente', 'placa'];

    /**
     * Função responsável por fazer o relacionamento entre o veiculo e o cliente.
     * @return void
     */
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, "id_cliente", "id");
    }
}
