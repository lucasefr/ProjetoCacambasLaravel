<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\Cacambas;
use App\Http\Requests\CacambasFormRequest;
use DB;

class CacambasController extends Controller
{
    //
    public function __construct(){
    	//
    }

    public function index(Request $request){

    	if($request){
    		$query=trim($request->get('searchText'));
    		$cacambas=DB::table('cacambas')
    		->where('numero', 'LIKE', '%'.$query.'%')
    		->where('condicao', '=', '1')
    		->orderBy('idCacambas', 'asc')
    		->paginate(7);
    		return view('cacambas.index', [
    			"cacambas"=>$cacambas, "searchText"=>$query
    			]);
        }
    }

    public function create(){
    	return view("cacambas.create");
    }
 
    public function store(CacambasFormRequest $request){
    	$cacambas = new Cacambas;
    	$cacambas->Numero=$request->get('Numero');
    	$cacambas->condicao=1;
    	$cacambas->save();
    	return Redirect::to('cacambas');
    }

    public function show($id){
    	return view("cacambas.show", 
    		["cacambas"=>cacambas::findOrFail($id)]);
    }

    public function edit($id){
    	return view("cacambas.edit", 
    		["cacambas"=>cacambas::findOrFail($id)]);
    }

    public function update(CacambasFormRequest $request, $id){
    	$cacambas=cacambas::findOrFail($id);
    	$cacambas->Numero=$request->get('Numero');
    	$cacambas->update();
    	return Redirect::to('cacambas');
    }

    public function destroy($id){
    	$cacambas=cacambas::findOrFail($id);
    	$cacambas->condicao='0';
    	$cacambas->update();
    	return Redirect::to('cacambas');
    }
}
