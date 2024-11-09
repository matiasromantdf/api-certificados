<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capacidad extends Model{
    protected $table = "capacidades";

    protected $fillable = ['nombre'];

    public $timestamps = false;

    public function alumnos(){
        return $this->belongsToMany('App\Models\Alumno', 'alumnos_capacidades', 'capacidad_id', 'alumno_id');
    }

}