<?php

use App\Http\Controllers\HomeController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
route::get('home', [HomeController::class,'index'])->middleware(['auth'])->name('home');
route::get('calendar', [HomeController::class,'calendar'])->middleware(['auth'])->name('calendar');
route::get('tables', [HomeController::class,'tables'])->middleware(['auth'])->name('tables');
route::get('detailbarang', [HomeController::class,'detailbarang'])->middleware(['auth'])->name('detailbarang');
route::get('daftarbarang', [HomeController::class,'daftarbarang'])->middleware(['auth'])->name('daftarbarang');
route::get('cekout', [HomeController::class,'cekout'])->middleware(['auth'])->name('cekout');


require __DIR__.'/auth.php';
