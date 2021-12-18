<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Retorna todos os clientes cadastrados
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo("Clientes cadastrados: ");
        return Cliente::all();
    }

    /**
     * Faz o cadastro de um novo cliente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());
        $cliente->save();
        echo($cliente);
        return ("Cliente cadastrado com sucesso");
    }

    /**
     * Mostra o usuário desejado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Cliente::findOrFail($id);
    }

    /**
     * Atualiza os dados do cliente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return ("Cadastro do cliente: $cliente->nome atualizado com sucesso");
    }

    /**
     * Remove o cliente dos registros.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        echo($cliente);
        $cliente->delete();
        return ("Cliente removido dos registros");
    }
}
