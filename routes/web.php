<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () use ($router) {
    return "Welcome";
});

$router->group(['prefix' => 'api'], function() use ($router){
    /**route login and register */
    $router->post('register', 'AuthController@register');
    $router->post('login', 'AuthController@login');

    $router->group(['middleware' => 'auth'], function() use ($router){
        /**route of authentificated */
        $router->post('logout', 'AuthController@logout');
        $router->get('refresh', 'AuthController@refresh');
        $router->post('refresh', 'AuthController@refresh');
        $router->post('profile', 'AuthController@profile');

        /**route of Products */
        $router->get('Products', 'ProductController@AllProducts');
        $router->get('Products/{id}', 'ProductController@OneProducts');
        $router->post('Products', 'ProductController@create');
        $router->put('Products/{id}', 'ProductController@update');
        $router->delete('Products/{id}', 'ProductController@delete');
        
    });
});