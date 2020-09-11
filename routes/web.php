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

Route::get('/', function () {
    return view('home');
})->name('welcome');

Auth::routes();
Route::get('/view', 'Controller@View')->name('view');
Route::get('/home', 'Controller@home')->name('home');
Route::get('/register', 'AuthController@showregisterform')->name('admin.register');
Route::get('/admin', 'AuthController@dashboard')->name('administrador');
Route::get('/login', 'AuthController@showloginform')->name('admin.login');
Route::post('/login/do', 'AuthController@login')->name('admin.login.do');
Route::get('/logout', 'AuthController@logout')->name('admin.logout');
Route::get('/event', 'Controller@verEvento')->name('event');
Route::get('/myevents', 'Controller@meusEventos')->name('myevents');
Route::get('/profile', 'Controller@profile')->name('profile');
Route::get('/registerevents', 'EventController@registerEvent')->name('registerevents');
Route::post('/registerevents/do', 'EventController@store')->name('registerevent');
Route::get('/eventinformation', 'Controller@eventInformation')->name('eventinformation');
