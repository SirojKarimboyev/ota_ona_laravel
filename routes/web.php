<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BaseController;

use App\Http\Controllers\PostController;


Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::resource('posts', PostController::class);

Route::get('/',[App\Http\Controllers\BaseController::class, 'index'])->name('index');
Route::get('/about',[App\Http\Controllers\BaseController::class, 'about'])->name('about');
Route::get('/blog',[App\Http\Controllers\BaseController::class, 'blog'])->name('blog');
Route::get('/admin',[App\Http\Controllers\BaseController::class, 'admin'])->name('admin');
Route::post('/create_post',[App\Http\Controllers\BaseController::class, 'create_post'])->name('create_post');
Route::post('/contact', [App\Http\Controllers\BaseController::class, 'contact'])->name('contact.submit');
Route::get('/blogdetail/{id}',[BaseController::class,'details'])->name('details');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
