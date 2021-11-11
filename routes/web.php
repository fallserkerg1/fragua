<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeController;
use App\Models\Employe;
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
    return view('admin.index');
});
//Registro Guns
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/table', [AdminController::class, 'show'])->name('admin.table');
Route::post('/admin/table', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/table/{gun}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/table/{gun}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/table/{gun}', [AdminController::class, 'destroy'])->name('admin.destroy');
//Registro Employe
Route::get('/admin/table/employes', [EmployeController::class, 'index'])->name('admin.employes');
Route::post('/admin/table/employes', [EmployeController::class, 'create'])->name('admin.store-employe');
Route::get('/admin/table/employe/{employe}/edit', [EmployeController::class, 'edit'])->name('admin.editEmploye');
Route::put('/admin/table/employe/{employe}', [EmployeController::class, 'update'])->name('admin.updateEmploye');
Route::delete('admin/table/employe/{employe}', [EmployeController::class, 'delete'])->name('admin.deleteEmploye');
//Registro de Usuarios

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
