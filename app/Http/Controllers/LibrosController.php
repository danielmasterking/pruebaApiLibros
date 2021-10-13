<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;

class LibrosController extends Controller
{
 
	public function getlibros() {
		$libros = Libros::all();
		return [
			'code' => 'codigo http ok',
			'data' => $libros
		];
	}


	public function getLibro($id) {
		$libro = Libros::where('id','=',$id)->get();
		return  [
			'code' => 'codigo http ok',
			'data' => $libro
		];
	}


	public function nuevoLibro(Request $request) {
		$libro = new Libros;
		$libro->nombre = $request->get('nombre');
		$libro->autor = $request->get('autor');
		$libro->save();

		return [
			'code' => 'codigo http crear',
			'data' => $libro
		];
	}

	public function libroActualizar(Request $request ,$id){
		$libro = Libros::find($id);

		if($libro == null){
			return [
				'code' => 'codigo http no content'
			];
		}

		if(!empty($request->get('nombre')))
			$libro->nombre = $request->get('nombre');

		if(!empty($request->get('autor')))
			$libro->autor = $request->get('autor');

		$libro->save();

		return [
			'code' => 'codigo http ok',
			'data' => $libro
		];
	}

	public function libroEliminar($id){
		$libro = Libros::find($id);
		$libro->delete();

		return [
			'code' => 'codigo http no content'
		];
	}
}
