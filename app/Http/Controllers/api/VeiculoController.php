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
        $veiculos = Veiculo::all();
        if(!$veiculos->count()){
            return ("Nenhum veículo cadastrado.");
        }
        echo("Todos os Veículos do Cadastrados: \n");
        return $veiculos;
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
        echo("$veiculo \n");
        return ("Veículo cadastrado com sucesso!!");
    }

    /**
     * Retorna todos os veículs do cliente.
     *
     * @param  $cliente
     * @return \Illuminate\Http\Response
     */
    public function veiculos(Cliente $cliente){
        echo("Todos os Veículos do Cliente: $cliente->nome \n");
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
        echo("$veiculo \n");
        return ("Cadastro do veículo atualizado com sucesso!!");
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
        echo("$veiculo \n");
        $veiculo->delete();
        return ("Veículo removido dos registros!!");
    }

    /**
     * Consulta de todos os veículos cadastrados na base,
     * onde o último número da placa do carro é igual ao informado.
     *
     * @param  int  $numero
     * @return \Illuminate\Http\Response
     */
    public function consultaPlaca($numero){
        $veiculos = Veiculo::where([
            ['placa', 'LIKE', "%{$numero}"],
        ])->get();
        if(!$veiculos->count()){
            return ("Nenhuma placa encontrada com este número final.");
        }
        echo("Placas encontradas, com o final: $numero \n");
        return $veiculos;
    }
}
