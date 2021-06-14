<?php

use App\Http\Controllers\BlogController;
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

Route::get('/blogs', [BlogController::class, 'index']);
Route::post('/blogs', [BlogController::class, 'store']);
Route::get('/dashboard', [BlogController::class, 'create'])->middleware(['auth'])->name('dashboard');
//Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');
Route::get('/blogs/{blog}', [BlogController::class, 'show']);
Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blogs/{blog}', [BlogController::class, 'update']);
Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
