<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificado extends Model{
    protected $table = "certificados";

    protected $fillable = ['alumno_id'];

    public $timestamps = true;

    public function alumno(){
        return $this->belongsTo('App\Models\Alumno');
    }

    public function capacidades(){
        return $this->belongsToMany('App\Models\Capacidad','certificados_capacidades','certificado_id','capacidad_id');
    }

     public function getHTMLCertificado($textoFecha){
        $alumno = $this->alumno;
        $capacidades = $this->capacidades;
        $html='
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gothic+A1&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gothic+A1&family=Great+Vibes&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
            <title>Certificado</title>
        </head>
        <body>

            <!-- parte de adelante -->
            <div class="alfaPadre">
                <div class="contenedor-dentro">
                    <div class="contenedor">
                        <div class="arriba">
                            <img class = "arriba-img"  src="';
                            $html.=url('/images/Group 1.png');
                            $html.='
                            " alt="colegio">
                            <div>
                                <h1>CERTIFICADO</h1>
                                <h2>Electricista de Automotores</h2>
                            </div>
                            <img class = "arriba-img" src="';
                            $html.=url('/images/Group 2.png');
                            $html.='" alt="tdf">
                        </div>
                        <div class="texto">
                            <p>El centro de formación profesional “Olga Bronzovich de Arko” 
                                <br>CUE N° 9400083 certifica que: </p>
                                <h3>';
                                $html.=$alumno->nombre.' '.$alumno->apellido;
                                $html.='</h3>
                                <p class="pabajo">DNI N° ';
                                $html.=$alumno->dni;
                                $html.=' ha logrado las capacidades que se detallan, requeridas<br> para el desempeño profesional y que forman parte del perfil profesional.</p>
                                <p class="fecha">Ushuaia, ';
                                $html.=$textoFecha;
                                $html.='</p>
                        </div>
                    </div>
                    <div class="parte-inferior">
                        <div class="firmas">
                            <p>Zavala Daniel Roque<br>Director<br>C.T.P<br>“Olga B. de Arko”</p>
                        </div>
                        <div class="firmas">
                            <p>Jorge Aramur Regente de<br>Enseñanza Práctica<br>C.T.P<br>“Olga B. de Arko”</p>
                        </div>
                        <div class="firmas">
                            <p>Joaquin Vidal Maestro de<br>Enseñanza Práctica<br>C.T.P<br>“Olga B. de Arko”</p>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
            <!-- parte de atras -->

            <div class="certificado">
        <div class="contenedor2">
                <div class="header">
                    <div class="datos__persona">
                        <span>Nombre: ';
                        $html.=$alumno->nombre.' '.$alumno->apellido;
                        $html.='
                        </span>
                        <span>DNI: ';
                        $html.=$alumno->dni;
                        $html.='
                        </span>
                    </div>
                    <div class="titulo">
                        Perfil Profesional: <span class="titulo__categoria">Electricista de Automotores</span>
                    </div>
                </div>
                <div class="capacidades__container">
                    <h2>Capacidades:</h2>
                    <ul>';
                    foreach($capacidades as $capacidad){
                        $html.='<li>C'.$capacidad->id.'. '.$capacidad->nombre.'</li>';
                    }
                    $html.='
                    </ul>
                </div>
                <footer>
                    <p><strong>Resolución:</strong> CFE N° 149/11 Anexo 1</p>
                    <p><strong>Carga Horaria:</strong> 400 horas reloj </p>
                </footer>
            </div>
        </div>
        </body>
        </html>
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: "Gothic A1", sans-serif;
                font-weight: 450;
                font-style: normal;
            }
            p{
                font-size: 21.5px;
            }
            .alfaPadre {
                background-image: url('.url("images/fondcert2.jpg").');
                background-size: cover;
                background-repeat: no-repeat;
                position: relative;
                width: 280mm;
                height: 190mm;
                margin-bottom: 50px;
                border: solid 1px black;
            }
            .contenedor-dentro{
                width: 280mm;
                height: 190mm;
                display: grid;
                grid-template-rows: 1fr 1fr;
            }
            /*inferior firmas*/
            .parte-inferior{
                display: flex;
                justify-content: space-around;
                align-items: end;
                width: 280mm;
                height: auto;
                margin-bottom: 70px;
            }
            .firmas{
                border-top: solid 2px black;
                width: 200px;
                height: auto;
                display: flex;
                text-align: center;
                justify-content: center;
            }
            .firmas p{
                font-size: 14px;
            }
            .contenedor{
                display: flex; 
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .arriba{
                margin-top: 45px;
                display: flex;
                align-items: center;
                justify-content: space-around;
                width: 100%;
                height: auto;
            }
            .arriba-img{
                width: 200px;
                height: auto;
            }
            .arriba h1{
                font-family: "Lexend", serif;
                font-optical-sizing: auto;
                font-style: normal;
                font-size: 70px;
            }
            .arriba h2{
                color: #0B31A5;
                font-weight: bold;
                font-size: 32px;
                margin-top: 20px;
            }
            .texto{
                margin-top: 40px;
                text-align: center;
                width: 720px;
                height: auto;
            }
            .texto h3{
                display: inline-block;
                padding-left: 20px;
                padding-right: 20px;
                font-family: "Great Vibes", cursive;
                font-weight: 408;
                font-style: normal;
                font-size: 60px;
                border-bottom: solid 2px #0C41DF;
                margin-bottom: 25px;
                margin-top: 20px;
            }
            .fecha{
                font-size: 15px;
            }


            /* css parte de atras */
            .certificado {
                    width: 280mm;
                    height: 190mm;
                    background-image: url("';
                    $html.=url("/images/fondo-certificado.jpg");
                    $html.='");
                    background-repeat: no-repeat;
                    background-size: contain;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    border: solid 1px black;
                }

                .contenedor2{
                    margin: 35px;
                }
                

                .capacidades__container h2, .titulo__categoria {
                    margin-left: 18px;
                    font-weight: bold;
                    color: #0505c5;
                }

                .header, footer{
                    margin: 18px;
                    display: flex;
                    flex-direction: row;
                    justify-content: space-between;
                    padding-right: 50px;
                }

                .datos__persona {
                    display: flex;
                    flex-direction: column;
                    gap: 10px;
                }

                ul { padding-left: 0; }

                ul li {
                    margin-left: 18px;
                    list-style: none;
                    padding-right: 50px;
                    font-size: 14px;
                }

        
            </style>';

                return $html;

    }
}