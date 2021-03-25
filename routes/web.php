<?php

use App\Http\Controllers\ExpenseController;
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
    return view('auth.login');
});

Route::get('/expense', [ExpenseController::class, 'index'])->middleware(['auth:sanctum', 'verified'])->name('expense');
Route::get('/expense/create', [ExpenseController::class, 'create'])->middleware(['auth:sanctum', 'verified'])->name('expense.create');
Route::post('/expense',[ExpenseController::class, 'store'])->middleware(['auth:sanctum', 'verified'])->name('expense.store');
Route::get('/expense/{expense}', [ExpenseController::class, 'show'])->middleware(['auth:sanctum', 'verified'])->name('expense.show');
Route::get('/expense/{expense}/edit', [ExpenseController::class, 'edit'])->middleware(['auth:sanctum', 'verified'])->name('expense.edit');
Route::put('/expense/{expense}', [ExpenseController::class, 'update'])->middleware(['auth:sanctum', 'verified'])->name('expense.update');