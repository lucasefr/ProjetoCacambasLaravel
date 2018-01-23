<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\Usuarios;
use App\Http\Requests\UsuariosFormRequest;
use DB;

class UsuariosController extends Controller
{
    //
    public function __construct(){
		//
		$this->middleware('auth');
    }

    public function index(Request $request){

    	if($request){
    		$query=trim($request->get('searchText'));
    		$usuarios=DB::table('usuarios')
            ->where('nome', 'LIKE', '%'.$query.'%')
            ->where('email', 'LIKE', '%'.$query.'%')
    		->where('condicao', '=', '1')
    		->orderBy('idUsuarios', 'asc')
    		->paginate(7);
    		return view('usuarios.index', [
    			"usuarios"=>$usuarios, "searchText"=>$query
    			]);
        }
    }

    public function create(){
    	return view("usuarios.create");
    }
 
    public function store(UsuariosFormRequest $request){
    	$usuarios = new Usuarios;
		$usuarios->nome=$request->get('nome');
		$usuarios->email=$request->get('email');
		$usuarios->senha=$request->get('senha');
    	$usuarios->condicao=1;
    	$usuarios->save();
    	return Redirect::to('usuarios');
    }

    public function show($id){
    	return view("usuarios.show", 
    		["usuarios"=>Usuarios::findOrFail($id)]);
    }

    public function edit($id){
    	return view("usuarios.edit", 
			["usuarios"=>Usuarios::findOrFail($id)]);
    }

    public function update(UsuariosFormRequest $request, $id){
    	$usuarios=Usuarios::findOrFail($id);
		$usuarios->nome=$request->get('nome');
		$usuarios->email=$request->get('email');
		$usuarios->senha=$request->get('senha');
    	$usuarios->update();
    	return Redirect::to('usuarios');
    }

    public function destroy($id){
    	$usuarios=Usuarios::findOrFail($id);
    	$usuarios->condicao='0';
    	$usuarios->update();
    	return Redirect::to('usuarios');
    }
}
