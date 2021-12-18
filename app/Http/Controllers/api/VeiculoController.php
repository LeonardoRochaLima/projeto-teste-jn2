<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Veiculo;
use App\Models\Cliente;

class VeiculoController extends Controller
{
    /**
     * Mostra todos os veículos cadastrados.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Veiculo::all();
    }

    /**
     * Cadastra o veículo do cliente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_cliente)
    {  
        $veiculo = new Veiculo();

        $cliente = Cliente::find($id_cliente);

        $veiculo->id_cliente = $cliente->id;
        $veiculo->nome_cliente = $cliente->nome;
        $veiculo->placa = $request->placa;
        $veiculo->save();
        return ("Veículo cadastrado com sucesso");
    }

    public function veiculos(Cliente $cliente){
        return $cliente->veiculos;
    }

    /**
     * Mostra o veículo.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Veiculo::findOrFail($id);
    }

    /**
     * Atualiz as informações do veículo.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->placa = $request->placa;
        $veiculo->save();
        return ("Cadastro do veículo atualizado com sucesso");
    }

    /**
     * Remove o veículo dos registros.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->delete();
        return ("Veículo removido dos registros");
    }
}
