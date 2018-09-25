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

$router->get('/', 'bandController@index');
$router->get('getAll', 'bandController@getAll');
$router->post('create', ['uses' => 'bandController@create']);
$router->put('update/{id}', 'bandController@update');
$router->delete('delete/{id}', 'bandController@delete');