<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [StudentController::class, 'index']);
Route::post('/store', [StudentController::class, 'store'])->name('store');
Route::get('fetch-all', [StudentController::class, 'fetchAll'])->name('fetchAll');
Route::get('edit', [StudentController::class, 'edit'])->name('edit');
Route::post('update', [StudentController::class, 'update'])->name('update');
Route::post('delete', [StudentController::class, 'delete'])->name('delete');