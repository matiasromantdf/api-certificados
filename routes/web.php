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

$router->get('/alumnos', 'AlumnoController@index');
$router->post('/alumnos', 'AlumnoController@store');
$router->get('/alumnos/{id}', 'AlumnoController@show');
$router->put('/alumnos/{id}', 'AlumnoController@update');
$router->delete('/alumnos/{id}', 'AlumnoController@destroy');



//capacidades

$router->get('/capacidades', 'CapacidadController@index');
$router->post('/capacidades', 'CapacidadController@store');
$router->get('/capacidades/{id}', 'CapacidadController@show');
$router->put('/capacidades/{id}', 'CapacidadController@update');
$router->delete('/capacidades/{id}', 'CapacidadController@destroy');

//certificado

$router->get('/alumnos/{id}/certificado', 'AlumnoController@getCertificado');

