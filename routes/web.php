<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Pages in website
Route::group(['middleware' => ['auth']], function () {
    Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.view');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/transaction', [TransactionController::class, 'create'])->name('transaction.create');
    Route::get('/report', [DashboardController::class, 'report'])->name('report');
    Route::post('/budget/add', [
        TransactionController::class, 'setBudget'
    ])->name('budget.set');
});

Route::get('/subscription', function () {
    return view('pages.subscription');
});

Route::get('/customer-center', function () {
    return view('pages.customer-center');
});
Route::get('/team', function () {
    return view('pages.team');
});
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/faq', function () {
    return view('pages.faq');
});

require __DIR__ . '/auth.php';
