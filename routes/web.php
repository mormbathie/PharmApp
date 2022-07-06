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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/', 'App\Http\Controllers\MedicamentController@index')->name('index');
Route::get('/view', 'App\Http\Controllers\MedicamentController@view')->name('view');
Route::post('/add', 'App\Http\Controllers\MedicamentController@add')->name('add');
Route::get('/', 'App\Http\Controllers\MedicamentController@allMedicament')->name('index');

Route::get('/test', 'App\Http\Controllers\MedicamentController@test')->name('test');
Route::get('/destroy/{id}', 'App\Http\Controllers\MedicamentController@destroy')->name('destroy');
Route::get('/edit/{id}', 'App\Http\Controllers\MedicamentController@edit')->name('edit');
// Route::delete('destroy/{id}', function ($id) {
//     return view('index');
// });

