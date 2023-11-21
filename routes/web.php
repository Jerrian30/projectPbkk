<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ProfileController;


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
    return view('partials.master');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//ROUTE BUKU
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books',[BookController::class, 'store'])->name('books.store');
Route::get('/books/show/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/edit/{book}', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
Route::get('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

//ROUTE PENULIS
Route::get('authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('authors/create', [AuthorController::Class, 'create'])->name('authors.create');
Route::post('authors', [AuthorController::class,'store'])->name('authors.store');
Route::get('authors/show/{author}', [AuthorController::class, 'show'])->name('authors.show');
Route::get('authors/edit/{author}', [AuthorController::class, 'edit'])->name('authors.edit');
Route::put('authors/{author}', [AuthorController::class, 'update'])->name('authors.update');
Route::get('authors/{author}', [AuthorController::class, 'destroy'])->name('authors.destroy');




require __DIR__.'/auth.php';
