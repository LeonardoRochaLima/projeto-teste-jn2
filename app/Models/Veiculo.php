<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class Veiculo extends Model
{
    protected $fillable = [
        'id_cliente','placa',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, "id_cliente", "id");
    }
}
