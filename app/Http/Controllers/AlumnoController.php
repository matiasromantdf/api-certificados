<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller{

    public function index(){
        $alumnos = Alumno::all();
        foreach($alumnos as $alumno){
            $alumno->capacidades;
        }
        return response()->json($alumnos);
    }

    public function store(Request $request){
        $alumno = new Alumno();
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->dni = $request->dni;
        $alumno->save();
        return response()->json($alumno);
    }

    public function show($id){
        $alumno = Alumno::find($id);
        if($alumno){
            $alumno->capacidades;
        }
        return response()->json($alumno);
    }

    public function update(Request $request, $id){
        $alumno = Alumno::find($id);
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->dni = $request->dni;
        $alumno->save();
        return response()->json($alumno);
    }

    public function destroy($id){
        $alumno = Alumno::find($id);
        $alumno->delete();
        return response()->json($alumno);
    }

    public function getCertificado($id,request $request){
        $alumno = Alumno::find($id);
        if($alumno){
            $alumno->capacidades;
        }
        $textoFecha = $request->fecha;
        $html = $alumno->getHTMLCertificado($textoFecha);
        return response($html)->header('Content-Type', 'text/html');
        
    
    }

}