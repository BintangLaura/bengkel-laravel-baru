<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('pages.landing-page');
});

Route::get('/login', [AuthController::class, 'index']);
Route::get('/regis', [AuthController::class, 'regis']);
Route::get('/checkout', [AuthController::class, 'checkout']);
Route::get('/bayar/sukses', [AuthController::class, 'bayar']);

