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

$app->get('/', function () use ($app) {
    return $app->version();
});
$app->get('/todo', 'categoryController@index');
$app->get('/todo/{id}', 'categoryController@show');
$app->post('/todo', 'categoryController@store');
$app->put('/todo/{id}', 'categoryController@update');
$app->delete('/todo/{id}', 'categoryController@destroy');

$app->get('/', function () use ($app) {
    return $app->version();
});
$app->get('/buku', 'categoryController@index');
$app->get('/buku/{id_book}', 'categoryController@showbuku');
$app->post('/buku', 'categoryController@storebuku');
$app->put('/buku/{id_book}', 'categoryController@updatebuku');
$app->delete('/buku/{id_book}', 'categoryController@destroybuku');