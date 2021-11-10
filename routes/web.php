<?php

use App\Http\Controllers\AdminController;
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

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/table', [AdminController::class, 'table'])->name('admin.table');
//Registro
Route::post('/admin/table', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/table/employes', [AdminController::class, 'employes'])->name('admin.employes');
//Registro
Route::post('/admin/table/employes', [AdminController::class, 'employe'])->name('admin.store-employe');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
