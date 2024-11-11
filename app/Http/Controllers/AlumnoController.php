<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Certificado;
use Mpdf\Mpdf;



class AlumnoController extends Controller{

    public function index(){
        $alumnos = Alumno::all();
        foreach($alumnos as $alumno){
            $alumno->certificados;
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

    // public function addCapacidad($dni, Request $request){
    //     $alumno = Alumno::where('dni',$dni)->first();
    //     $capadidades = $request->capacidades;
    //     $alumno->capacidades()->attach($capadidades);
    //     return response()->json($alumno);
    // }

    public function addCertificado($dni, Request $request){
        $alumno = Alumno::where('dni',$dni)->first();
        $capacidades = $request->capacidades;
        $certificado = new Certificado();
        $certificado->alumno_id = $alumno->id;
        $certificado->save();
        $certificado->capacidades()->attach($capacidades);
        return response()->json($certificado);
       
    }

    public function show($dni){
        $alumno = Alumno::where('dni',$dni)->first();
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
        $certificado = Certificado::find($id);
        $alumno = $certificado->alumno; 
        $textoFecha = $request->fecha;
        $html = $alumno->getHTMLCertificado($textoFecha);
        return response($html)->header('Content-Type','html');
        
       
       
        // $mpdf = new Mpdf([
        //     'mode' => 'utf-8',
        //     'format' => 'A4-L'            
        // ]);
        // $mpdf->WriteHTML($html);
        // //a4-Landscape
        // $pdf = $mpdf->Output();
        // return response($pdf)->header('Content-Type','application/pdf');
               
    
    }

}