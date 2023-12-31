<?php

use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\KelolaPesananController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard.dash-admin');
})->middleware(['auth', 'verified', 'role:admin|penjual'])->name('dashboard');

Route::get('/', fn ()=> view('home'))->name('home');


Route::resource('/product',ProductController::class);
Route::resource('/dashboard/kelolaproducts',DashboardProductController::class)->middleware(['auth', 'verified', 'role:admin|penjual']);

Route::resource('/dashboard/daftarorder',KelolaPesananController::class)->middleware(['auth', 'verified', 'role:admin|penjual']);

Route::get('/payment/{id}', [PaymentController::class, 'payment'])->middleware(['auth', 'verified','role:admin|pembeli']);
Route::post('/payment/{id}',[PaymentController::class, 'payment_post'])->middleware(['auth', 'verified','role:admin|pembeli']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
