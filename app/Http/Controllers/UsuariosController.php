<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\User;
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
    		$usuarios=DB::table('users')
            ->where('name', 'LIKE', '%'.$query.'%')
            ->where('email', 'LIKE', '%'.$query.'%')
    		->orderBy('id', 'asc')
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
    	$usuarios = new User;
		$usuarios->name=$request->get('name');
		$usuarios->email=$request->get('email');
		$usuarios->password=bcrypt($request->get('password'));
    	$usuarios->save();
    	return Redirect::to('usuarios');
    }

    public function show($id){
    	return view("usuarios.show", 
    		["usuarios"=>User::findOrFail($id)]);
    }

    public function edit($id){
    	return view("usuarios.edit", 
			["usuarios"=>User::findOrFail($id)]);
    }

    public function update(UsuariosFormRequest $request, $id){
    	$usuarios=User::findOrFail($id);
		$usuarios->nome=$request->get('name');
		$usuarios->email=$request->get('email');
		$usuarios->senha=bcrypt($request->get('password'));
    	$usuarios->update();
    	return Redirect::to('usuarios');
    }

    public function destroy($id){
    	$usuarios=User::findOrFail($id);
    	$usuarios=DB::table('users')->where('id', '=', $id)->delete();
    	return Redirect::to('usuarios');
    }
}
