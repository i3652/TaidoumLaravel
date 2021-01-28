<?php

use Illuminate\Support\Facades\Route;
use App\Models\User as User;

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

Route::get('/', 'App\Http\Controllers\PostController@postIndex');

Route::get('/inscription', function () {
    return view('inscription');
});

Route::get('/inscription', 'App\Http\Controllers\InscriptionController@formulaire');

Route::post('/inscription', 'App\Http\Controllers\InscriptionController@inscription');


Route::get('/users/index', 'App\Http\Controllers\UsersController@index');

Route::get('/users/{id}', 'App\Http\Controllers\UsersController@show')->name('Show.User');

Route::get('/connexion', 'App\Http\Controllers\ConnexionController@form');

Route::post('/connexion', 'App\Http\Controllers\ConnexionController@connexion');

Route::get('/dashboard', 'App\Http\Controllers\AccountController@dashboard');

Route::get('/signout', 'App\Http\Controllers\AccountController@signout');

Route::get('/password_modification', 'App\Http\Controllers\AccountController@form_password_modification');

Route::post('/password_modification', 'App\Http\Controllers\AccountController@password_modification');

Route::get('/{email}', 'App\Http\Controllers\UsersController@profile');

Route::post('/new_post', 'App\Http\Controllers\PostController@new_post');

Route::group([
    'middleware' => 'App\Http\Middleware\Auth'
], function () {
    Route::post('/new_post', 'App\Http\Controllers\PostController@new_post');
    Route::get('/password_modification', 'App\Http\Controllers\AccountController@form_password_modification');
    Route::post('/password_modification', 'App\Http\Controllers\AccountController@password_modification');
    Route::get('/dashboard', 'App\Http\Controllers\AccountController@dashboard');
    Route::get('/signout', 'App\Http\Controllers\AccountController@signout');
});

Route::post('/{email}/follow', 'App\Http\Controllers\UsersController@follow');
Route::delete('/{email}/follow', 'App\Http\Controllers\UsersController@unfollow');
