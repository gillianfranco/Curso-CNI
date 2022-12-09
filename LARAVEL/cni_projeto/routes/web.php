<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteControllers;
use App\Http\Controllers\NomeController;
use App\Http\Controllers\SiteForm;
use App\Http\Controllers\DataBase;
use Facade\FlareClient\View;

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

Route::get('/Sobre',[SiteControllers::class, 'sobre']);
Route::get('/Home', [SiteControllers::class, 'home']);
Route::get('/Servico', [SiteControllers::class, 'servico']);
Route::get('/Servicos/{id?}', [SiteControllers::class, 'servicos']);
Route::get('/Nome/{nome?}',NomeController::class);

Route::get('/Form',SiteForm::class);

Route::get('/DataBase', [DataBase::class, 'data']);