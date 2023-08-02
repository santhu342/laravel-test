<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

/*

*/
// GET
Route::get('/blog', [postController::class, 'index'])->name('blog.index');

Route::get('/blog/{id}', [postController::class, 'show'])->name('blog.show');


Route::get('/blog/{id}/{name}', [postController::class, 'show'])
	->where([
		'id'=>'[0-9]+',
		'name'=>'[A-Za-z]+'
		]);


Route::get('/blog/create', [postController::class, 'create'])->name('blog.create');
Route::post('/blog/', [postController::class, 'store'])->name('blog.store');

Route::get('/blog/edit/{id}', [postController::class, 'edit'])->name('blog.edit');
Route::patch('/blog/{id}', [postController::class, 'update'])->name('blog.update');

Route::delete('/blog/{id}', [postController::class, 'destroy'])->name('blog.destroy');

//Route::match(['get','post'], '/blog', [postController::class, 'index']);

// Route::any('/blog', [postController::class, 'index']);

// Route::resource('blog',postController::class);

//Route::view('/blog', 'blog.index', ['name' => 'Santhosh Kumar']);

Route::get('/',homeController::class);