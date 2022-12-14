<?php

use Illuminate\Support\Facades\Route;
# use App\Http\Controllers\RegistrationController;

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
    return view('welcome');
});

# Route::get('/registration', [RegistrationController::Class, 'index']);
Route::get('/registration', 'RegistrationController@index');
Route::get('/registration/{employee_dept}', 'RegistrationController@index');
Route::get('/registrations', 'RegistrationController@show');
Route::post('/registration/store', 'RegistrationController@store');
Route::delete('/registration/{id}', 'RegistrationController@delete');

