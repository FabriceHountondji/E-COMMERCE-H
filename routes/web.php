<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;


use App\Http\Controllers\Admin\DashboardController;


use App\Http\Controllers\Admin\ActeurController;
use App\Http\Controllers\Admin\FonctionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\CaissierController;
use App\Http\Controllers\Admin\LivreurController;
use App\Http\Controllers\Admin\ProduitController;


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

// LOGIN ET DECONNEXION

Route::get('/login', [LoginController::class , 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [LogoutController::class,'logout'])->name('logout');


Route::get('/', function () {return view('index'); });
// ACTIONS SUR TABLEAU DE BORD

Route::resource('dashboard', DashboardController::class);
Route::resource('acteurs', ActeurController::class);
Route::resource('produits', ProduitController::class);
Route::resource('caissiers', CaissierController::class);
Route::resource('livreurs', LivreurController::class);
Route::resource('roles', RoleController::class);
Route::resource('fonctions', FonctionController::class);
