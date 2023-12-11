<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataTablesShowController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/pages', [DataTablesShowController::class, '__invoke']);
Route::get('/admin/administrator_list', [DataTablesShowController::class, 'administratorList']);
Route::get('/admin/new_additions', [DataTablesShowController::class, 'newAdditionsAdministrator']);
