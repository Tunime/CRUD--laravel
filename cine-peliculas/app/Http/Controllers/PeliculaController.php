<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Http\Requests;

class PeliculaController extends Controller
{
    //
    public function create (Request $request){
    	$pelicula = new Pelicula();
    	$pelicula -> nombre = $request -> nombre;
    	$pelicula -> duracion = $request -> duracion;
    	$pelicula -> actor = $request -> actor;
    	$pelicula -> save();
    	return redirect('/')

    }
}
