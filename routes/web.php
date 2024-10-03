<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('listings');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//LISTINGS ROUTE LOGIC.
//View All Listings.
Route::get('/', [ListingController::class, 'index']);

//View Single Listings.
Route::get('/listings/{listing}', [ListingController::class, 'show']);


//POSTS ROUTE LOGIC.
//View create Request Form & Store Request.
Route::middleware(['auth'])->group(function () {
    //Create Request Post.
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    //Show Request Post.
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    //Store Request Post.
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    //Edit Request Post.
    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
    //Update Request Post.
    Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
    //Delete Request Post.
     Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    //Show Selected Request Post.
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
});