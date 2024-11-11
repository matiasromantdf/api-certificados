<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model{
    protected $table = "alumnos";

    protected $fillable = ['nombre','apellido','dni'];

    public $timestamps = true;

   
    //  public function getHTMLCertificado($textoFecha){
    //     $html='
        
    //     ';

    //     return $html;

    // }
    
    public function certificados(){
        return $this->hasMany(Certificado::class);
    }        
}