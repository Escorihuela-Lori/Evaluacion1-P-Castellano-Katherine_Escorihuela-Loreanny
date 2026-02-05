<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedad;


class PropiedadController extends Controller
{
    public function index()
    {
        $propiedades = Propiedad::orderBy('created_at', 'desc')->get(); 
        $propiedades->transform(function ($propiedad) {
            $propiedad->usado_texto = $propiedad->disponible ? 'Disponible' : 'No disponible';
            return $propiedad;
        });
        return view('index', compact('propiedades'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $propiedad = new Propiedad();

        $propiedad->direccion = $request['direccion'];
        $propiedad->MetrosCuadrados = (float) $request['MetrosCuadrados'];
        $propiedad->habitaciones = $request['habitaciones'];
        $propiedad->disponible = true;
        $propiedad->save();

        return redirect('propiedades');
    }

    public function show($propiedad){
        $propiedad = Propiedad::find($propiedad);
        return view('show', compact('propiedad'));
    }
    
    public function destroy($id){
        $propiedad = Propiedad::find($id);
        $propiedad->delete();
        return redirect('propiedades');
    }

}
