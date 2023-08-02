<?php

use App\Http\Controllers\fallbackController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

/*

*/
// GET
Route::prefix('/blog')->group(function () {
    
    Route::get('/', [postController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [postController::class, 'show'])->name('blog.show');
    Route::get('/{id}/{name}', [postController::class, 'show'])
        ->where([
            'id'=>'[0-9]+',
            'name'=>'[A-Za-z]+'
            ]);
    Route::get('/create', [postController::class, 'create'])->name('blog.create');
    Route::post('/', [postController::class, 'store'])->name('blog.store');
    Route::get('/edit/{id}', [postController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [postController::class, 'update'])->name('blog.update');
    Route::delete('/{id}', [postController::class, 'destroy'])->name('blog.destroy');

});

//Route::match(['get','post'], '/blog', [postController::class, 'index']);

// Route::any('/blog', [postController::class, 'index']);

// Route::resource('blog',postController::class);

//Route::view('/blog', 'blog.index', ['name' => 'Santhosh Kumar']);

Route::get('/',homeController::class);

// route fallback

Route::fallback(fallbackController::class);