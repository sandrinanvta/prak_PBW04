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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::get('/posts/create', [PostController::class,
'create'])->name('posts.create');
Route::post('/posts', [PostController::class,
'store'])->name('posts.store');
Route::get('/posts/{post}/edit', [PostController::class,
'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class,
'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class,
'destroy'])->name('posts.destroy');
});

require __DIR__.'/auth.php';
