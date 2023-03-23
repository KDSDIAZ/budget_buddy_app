<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\SavingsController;
use App\Http\Controllers\DashboardController;
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
    return view('landingpage');
});

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard',[ChartController::class, 'donutChart']);

Route::post('incomes', [IncomeController::class, 'store'])->name('incomes.store');
Route::post('expenses', [ExpenseController::class, 'store'])->name('expenses.store');
Route::post('savings', [SavingsController::class, 'store'])->name('savings.store');

Route::delete('/incomes/{id}', [IncomeController::class, 'destroy'])->name('incomes.destroy');
Route::delete('/expenses/{id}', [ExpenseController::class, 'destroy'])->name('expenses.destroy');
Route::delete('/savings/{id}', [SavingsController::class, 'destroy'])->name('savings.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
