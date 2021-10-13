<?php

namespace App\Http\Controllers;
use App\Models\Autor;
use App\Models\Libros;
use Illuminate\Http\Request;

class AutorController extends Controller
{
	public function getAutores(){
		$autores = Autor::all();
		
		$data = [];
		foreach($autores as $autor) {
			$libros = Libros::where('autor','=',$autor->nombre)->get();
			$arrayLibros = [];
			foreach($libros as $libro){
				$arrayLibros[] = $libro->nombre;
			}
			$data[] = [
				'id' => $autor->id,
				'nombre' => $autor->nombre,
				'libros' => $arrayLibros
			];
		}

		return [
			'code' => 'codigo http ok',
			'data' => $data
		];

	}

	public function getAutor($id){
		$autores = Autor::where('id','=',$id)->get();
		
		$data = [];
		foreach($autores as $autor) {
			$libros = Libros::where('autor','=',$autor->nombre)->get();
			$arrayLibros = [];
			foreach($libros as $libro){
				$arrayLibros[] = $libro->nombre;
			}
			$data[] = [
				'id' => $autor->id,
				'nombre' => $autor->nombre,
				'libros' => $arrayLibros
			];
		}

		return [
			'code' => 'codigo http ok',
			'data' => $data
		];

	}

	public function nuevoAutor(Request $request) {
		$autor = new Autor;
		$autor->nombre = $request->get('nombre');
		$autor->save();

		return [
			'code' => 'codigo http crear',
			'data' => $autor
		];
	}


	public function AutorActualizar(Request $request ,$id){
		$Autor = Autor::find($id);

		if($Autor == null){
			return [
				'code' => 'codigo http no content'
			];
		}

		$Autor->nombre = $request->get('nombre');

		$Autor->save();

		return [
			'code' => 'codigo http ok',
			'data' => $Autor
		];
	}


	public function AutorEliminar($id){
		$autor = Autor::find($id);
		$autor->delete();

		return [
			'code' => 'codigo http no content'
		];
	}

}
