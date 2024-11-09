<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capacidad;

class CapacidadController extends Controller{

    public function index(){
        $capacidades = Capacidad::all();
        return response()->json($capacidades);
    }

    public function store(Request $request){
        $capacidad = new Capacidad();
        $capacidad->nombre = $request->nombre;
        $capacidad->descripcion = $request->descripcion;
        $capacidad->save();
        return response()->json($capacidad);
    }

    public function show($id){
        $capacidad = Capacidad::find($id);
        return response()->json($capacidad);
    }

    public function update(Request $request, $id){
        $capacidad = Capacidad::find($id);
        $capacidad->nombre = $request->nombre;
        $capacidad->descripcion = $request->descripcion;
        $capacidad->save();
        return response()->json($capacidad);
    }

    public function destroy($id){
        $capacidad = Capacidad::find($id);
        $capacidad->delete();
        return response()->json($capacidad);
    }

}