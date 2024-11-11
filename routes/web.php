<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//alumnos

$router->get('/alumnos', 'AlumnoController@index');
$router->post('/alumnos', 'AlumnoController@store');
$router->get('/alumnos/{dni}', 'AlumnoController@show');
$router->put('/alumnos/{id}', 'AlumnoController@update');
$router->delete('/alumnos/{id}', 'AlumnoController@destroy');

//capacidades

$router->get('/capacidades', 'CapacidadController@index');
$router->post('/capacidades', 'CapacidadController@store');
$router->get('/capacidades/{id}', 'CapacidadController@show');
$router->put('/capacidades/{id}', 'CapacidadController@update');
$router->delete('/capacidades/{id}', 'CapacidadController@destroy');

//certificado

$router->get('/certificados/{id}', 'CertificadoController@getCertificado');
$router->post('/alumnos/{dni}/certificado', 'AlumnoController@addCertificado');//guardar certificado con las capacidades y el id del alumno



