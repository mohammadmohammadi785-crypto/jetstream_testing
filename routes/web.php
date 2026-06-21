<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post("create-post",[PostController::class, "create"]);
Route::get("Post",[PostController::class, "index"]);
Route::view("Post/create", 'Post.create');
Route::put('Post/update/{id}', [PostController::class, 'update']);
Route::get('Post/edit/{id}', [PostController::class, 'edit']);

require __DIR__.'/auth.php';