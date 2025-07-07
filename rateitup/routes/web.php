<?php

use Illuminate\Support\Facades\Route;

Route::get('storage/{path}', [App\Http\Controllers\ReviewController::class, 'storage'])
    ->where('path', '.*')
    ->name('storage');
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
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
Route::get('/Admin', function () {
    return view('index');
});
// Route::get('/Login', function () {
//     return view('login');
// })->name('login');
Route::get('/Register', function () {
    return view('register');
})->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', [ReviewController::class, 'index'])->name('review.index');
Route::get('/reviews/{id}', [ReviewController::class, 'show'])->name('review.show');
Route::post('/reviews', [ReviewController::class, 'store'])->name('review.store');
Route::resource('review', ReviewController::class)->only(['edit', 'destroy']);

Route::put('/review/{id}', [ReviewController::class, 'update'])->name('review.update');
