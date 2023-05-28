<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/transaction', function () {
    return view('pages.transaction');
});


Route::get('/subscription', function () {
    return view('pages.subscription');
});

Route::get('/customer-center', function () {
    return view('pages.customer-center');
});

Route::get('/test', function () {
    return view('auth.test');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

require __DIR__.'/auth.php';
