<?php

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
$router->get("api/agendamento", "AgendamentoController@getAll");

$router->group(['prefix' => "/api/agendamento"], function() use ($router){
    $router->get("/{id}", "AgendamentoController@get");
    $router->post("/", "AgendamentoController@save");
    $router->put("/{id}", "AgendamentoController@update");
    $router->put("/cancelar/{id}", "AgendamentoController@cancelar");
    $router->put("/ativar/{id}", "AgendamentoController@ativar");
    
});