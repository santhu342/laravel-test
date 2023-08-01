<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

/*

*/
// GET
Route::get('/blog', [postController::class, 'index'])->name('blog.index');

Route::get('/blog/{id}', [postController::class, 'show']);


Route::get('/blog/{id}/{name}', [postController::class, 'show'])
	->where([
		'id'=>'[0-9]+',
		'name'=>'[A-Za-z]+'
		]);


Route::get('/blog/create', [postController::class, 'create']);
Route::post('/blog/', [postController::class, 'store']);

Route::get('/blog/edit/{id}', [postController::class, 'edit']);
Route::patch('/blog/{id}', [postController::class, 'update']);

Route::delete('/blog/{id}', [postController::class, 'destroy']);

//Route::match(['get','post'], '/blog', [postController::class, 'index']);

// Route::any('/blog', [postController::class, 'index']);

// Route::resource('blog',postController::class);

//Route::view('/blog', 'blog.index', ['name' => 'Santhosh Kumar']);

Route::get('/',homeController::class);