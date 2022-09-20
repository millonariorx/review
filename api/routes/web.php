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

$router->group(['prefix' => 'post'], function () use ($router) {
    $router->get('all',  ['uses' => 'PostController@getAll']);
    $router->get('id/{id}', ['uses' => 'PostController@getById']);
    $router->post('',['uses'=>'PostController@createPost']);
});

$router->group(['prefix' => 'comentario'], function () use ($router) {
    $router->get('all',  ['uses' => 'ComentarioController@getAll']);
    $router->get('id/{id}', ['uses' => 'ComentarioController@getById']);
    $router->post('',['uses'=>'ComentarioController@createComment']);
    $router->get('idPost/{idPost}',['uses'=>'ComentarioController@getCommentsByIdPost']);
});
