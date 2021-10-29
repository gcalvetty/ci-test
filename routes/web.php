<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserGECNController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'Grp_adm',  'prefix'     => 'admin', 'namespace'  => 'Admin', ], function () {
    /*
    * ---- Edit USER --- 
    */
    Route::get('/edit-user/{id}', [UserGECNController::class, 'edit'])->name('edit-user')->where(['id' => '[0-9]+']);

    /*
    * ---- Update USER --- 
    */
    Route::put('/edit-user/{id}', [UserGECNController::class, 'update'])->name('update-user')->where(['id' => '[0-9]+']);
    
});