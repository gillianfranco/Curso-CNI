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

Route::get('/', [SiteController::class, 'category_view'])->name('SiteController.category_view');
Route::post('/', [SiteController::class, 'prod_register'])->name('SiteController.prod_register');
Route::get('/category', [SiteController::class, 'category'])->name('SiteController.category');

