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

/**
 * Menu
 */
Route::get('/', function () {
    return view('home');
});

/**
 * Lampadas
 */

$lampada = App\Http\Controllers\Lampadas::class;

Route::get('/lampada', [$lampada,'index'])->name('lampada.index');
Route::get('/lampada/create', [$lampada,'create'])->name('lampada.create');
Route::post('/lampada/store', [$lampada,'store'])->name('lampada.store');
Route::get('/lampada/atualizar-status/{lampada}', [$lampada,'updateStatus']);

/**
 * Persianas
 */

$persiana = App\Http\Controllers\Persianas::class;

Route::get('/persiana', [$persiana,'index'])->name('persiana.index');
Route::get('/persiana/create', [$persiana,'create'])->name('persiana.create');
Route::post('/persiana/store', [$persiana,'store'])->name('persiana.store');
Route::get('/persiana/atualizar-status/{persiana}', [$persiana,'updateStatus']);

/**
 * Varais
 */

$varal = App\Http\Controllers\Varais::class;

Route::get('/varal', [$varal,'index'])->name('varal.index');
Route::get('/varal/create', [$varal,'create'])->name('varal.create');
Route::post('/varal/store', [$varal,'store'])->name('varal.store');
Route::get('/varal/atualizar-status/{varal}', [$varal,'updateStatus']);
