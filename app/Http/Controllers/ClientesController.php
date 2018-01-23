<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\Clientes;
use App\Http\Requests\ClientesFormRequest;
use DB;

class ClientesController extends Controller
{
    //
    public function __construct(){
        //
        $this->middleware('auth');
    }

    public function index(Request $request){

    	if($request){
    		$query=trim($request->get('searchText'));
    		$clientes=DB::table('clientes')
            ->where('Nome', 'LIKE', '%'.$query.'%')
            ->where('TipoCliente', 'LIKE', '%'.$query.'%')
            ->where('CnpjCpf', 'LIKE', '%'.$query.'%')
            ->where('TelefoneFixo', 'LIKE', '%'.$query.'%')
            ->where('TelefoneComercial', 'LIKE', '%'.$query.'%')
            ->where('TelefoneCelular', 'LIKE', '%'.$query.'%')
            
    		->where('condicao', '=', '1')
    		->orderBy('idClientes', 'asc')
    		->paginate(7);
    		return view('clientes.index', [
    			"clientes"=>$clientes, "searchText"=>$query
    			]);
        }
    }

    public function index3(Request $request){
        
                if($request){
                    $query=trim($request->get('searchText'));
                    $clientes=DB::table('clientes')
                    ->where('Nome', 'LIKE', '%'.$query.'%')
                    ->where('TipoCliente', 'LIKE', '%'.$query.'%')
                    ->where('CnpjCpf', 'LIKE', '%'.$query.'%')
                    ->where('TelefoneFixo', 'LIKE', '%'.$query.'%')
                    ->where('TelefoneComercial', 'LIKE', '%'.$query.'%')
                    ->where('TelefoneCelular', 'LIKE', '%'.$query.'%')
                    ->where('Endereco', 'LIKE', '%'.$query.'%')
                    ->where('Numero', 'LIKE', '%'.$query.'%')
                    ->where('Bairro', 'LIKE', '%'.$query.'%')
                    ->where('Cidade', 'LIKE', '%'.$query.'%')
                    ->where('UF', 'LIKE', '%'.$query.'%')
                    ->where('Complemento', 'LIKE', '%'.$query.'%')
                    ->where('condicao', '=', '1')
                    ->orderBy('idClientes', 'asc')
                    ->paginate(7);
                    return view('clientes.index2', [
                        "clientes"=>$clientes, "searchText"=>$query
                        ]);
                }
            }
       


    public function create(){
    	return view("clientes.create");
    }
 
    public function store(ClientesFormRequest $request){
    	$clientes = new Clientes;
		$clientes->Nome=$request->get('Nome');
		$clientes->TipoCliente=$request->get('TipoCliente');
        $clientes->CnpjCpf=$request->get('CnpjCpf');
        $clientes->Email=$request->get('Email');
        $clientes->TelefoneFixo=$request->get('TelefoneFixo');
        $clientes->TelefoneComercial=$request->get('TelefoneComercial');
        $clientes->TelefoneCelular=$request->get('TelefoneCelular');
        $clientes->Endereco=$request->get('Endereco');
        $clientes->Numero=$request->get('Numero');
        $clientes->Bairro=$request->get('Bairro');
        $clientes->Cidade=$request->get('Cidade');
        $clientes->UF=$request->get('UF');
        $clientes->Complemento=$request->get('Complemento');
        $clientes->cep=$request->get('cep');

    	$clientes->condicao=1;
    	$clientes->save();
    	return Redirect::to('clientes');
    }

    public function show($id){
    	return view("clientes.show", 
            ["clientes"=>Clientes::findOrFail($id)]);
            
    }

    public function edit($id){
    	return view("clientes.edit", 
			["clientes"=>Clientes::findOrFail($id)]);
    }

    public function update(ClientesFormRequest $request, $id){
    	$clientes=Clientes::findOrFail($id);
		$clientes->Nome=$request->get('Nome');
		$clientes->TipoCliente=$request->get('TipoCliente');
        $clientes->CnpjCpf=$request->get('CnpjCpf');
        $clientes->Email=$request->get('Email');
        $clientes->TelefoneFixo=$request->get('TelefoneFixo');
        $clientes->TelefoneComercial=$request->get('TelefoneComercial');
        $clientes->TelefoneCelular=$request->get('TelefoneCelular');
        $clientes->Endereco=$request->get('Endereco');
        $clientes->Numero=$request->get('Numero');
        $clientes->Bairro=$request->get('Bairro');
        $clientes->Cidade=$request->get('Cidade');
        $clientes->UF=$request->get('UF');
        $clientes->Complemento=$request->get('Complemento');
        $clientes->cep=$request->get('cep');

    	$clientes->update();
    	return Redirect::to('clientes');
    }

    public function destroy($id){
    	$clientes=Clientes::findOrFail($id);
    	$clientes->condicao='0';
    	$clientes->update();
    	return Redirect::to('clientes');
    }
}
