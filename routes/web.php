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
Route::get('/nosotros', array('as' => 'nosotros', 'uses' => 'MainController@nosotros'));
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
    function () {
        Route::get('/', array('as' => 'admin', 'uses' => 'AdminController@dashboard'));
        Route::group(
            [
                'prefix' => 'project'
            ],
            function () {
                Route::get('/', array('as' => 'projects', 'uses' => 'AdminController@indexProject'));
                Route::get('/create', array('as' => 'create-project', 'uses' => 'AdminController@createProject'));
                Route::post('/create', array('as' => 'create-project', 'uses' => 'AdminController@createProject'));
                Route::get('/{project_name}', array('as' => 'set-project-view', 'uses' => 'AdminController@setProject'));
            }
        );


        Route::group(
            [
                'prefix' => 'enterview'
            ],
            function () {
                Route::get('/', array('as' => 'enterview', 'uses' => 'AdminController@indexEnterview'));
                Route::get('/create', array('as' => 'create-enterview', 'uses' => 'AdminController@createEnterview'));
                Route::post('/createQuestions', array('as' => 'create-enterview', 'uses' => 'AdminController@createEnterview'));
            }
        );

        Route::group(
            [
                'prefix' => 'user'
            ],
            function () {
                Route::get('/', array('as' => 'user', 'uses' => 'AdminController@indexUser'));
                Route::get('/create', array('as' => 'create-user', 'uses' => 'AdminController@createUser'));
                Route::post('/create', array('as' => 'create-user', 'uses' => 'AdminController@createUser'));
            }
        );

        Route::group(
            [
                'prefix' => 'diagnostics'
            ],
            function () {
                Route::get('/', array('as' => 'diagnostics', 'uses' => 'AdminController@indexDiagnostics'));
                Route::get('/create', array('as' => 'create-diagnostics', 'uses' => 'AdminController@createDiagnostics'));
            }
        );

        Route::group(
            [
                'prefix' => 'enterprise'
            ],
            function () {
                Route::get('/', array('as' => 'enterprise', 'uses' => 'AdminController@indexEnterprise'));
                Route::get('/create', array('as' => 'create-enterprise', 'uses' => 'AdminController@createEnterprise'));
                Route::post('/create', array('as' => 'create-enterprise', 'uses' => 'AdminController@createEnterprise'));
            }
        );

        Route::group(
            [
                'prefix' => 'proposals'
            ],
            function () {
                Route::get('/', array('as' => 'proposals', 'uses' => 'AdminController@indexProposals'));
                Route::get('create', array('as' => 'create-proposals', 'uses' => 'DropzoneController@createProposals'));
                Route::post('create/upload', array('as' => 'create.upload', 'uses' => 'DropzoneController@upload'));
            }
        );
    }
);
