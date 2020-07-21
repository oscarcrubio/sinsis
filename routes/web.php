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

Route::get('/', array('as' => 'home', 'uses' => 'MainController@index'));
Route::get('/contacto', array('as' => 'contact', 'uses' => 'MainController@contact'));
Route::get('/login', array('as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm'));
Route::post('/login', array('as' => 'login', 'uses' => 'Auth\LoginController@login'));
Route::get('/logout', array('as' => 'logout', 'uses' => 'Auth\LoginController@logout'));

/*
**
* Admin Routes
**
*/

Route::group(
    [
        'prefix' => 'admin'
    ],
    function(){
        Route::get('/', array('as' => 'admin', 'uses' => 'AdminController@dashboard'));
        Route::group(
            [
                'prefix' => 'project'
            ],
            function(){
                Route::get('/', array('as' => 'projects', 'uses' => 'AdminController@indexProject'));
                Route::get('/create', array('as' => 'create-project', 'uses' => 'AdminController@createProject'));
            });        
    });


