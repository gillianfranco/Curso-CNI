<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index'])->name('SiteController.index');
Route::get('/client/{id?}', [SiteController::class, 'client'])->name('SiteController.client');
Route::post('/register', [SiteController::class, 'view'])->name('SiteController.view');
Route::get('/register', [SiteController::class, 'set'])->name('SiteController.set');