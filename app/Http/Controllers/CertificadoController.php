<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificado;

class CertificadoController extends Controller{


    public function getCertificado($id, Request $request){
        $fecha = $request->fecha;
        $certificado = Certificado::find($id);
        $html = $certificado->getHTMLCertificado($fecha);
        return $html;


        
    }
}