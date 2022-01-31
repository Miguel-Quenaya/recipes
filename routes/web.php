<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CommentController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/categorias',[CategoryController::class, 'index'])->name('category.index');
Route::get('categorias/{id}',[CategoryController::class,'show'])->name('category.show');
Route::get('/create_recipe',[CategoryController::class,'create'])->name('category.create');

Route::get('/recipes',[RecipeController::class,'index'])->name('recipe.index');
Route::get('recipe/{id}',[RecipeController::class,'show'])->name('recipe.show');
Route::post('/store_recipe',[RecipeController::class,'store'])->name('recipe.create');


Route::post('/comments',[CommentController::class,'store'])->name('comment.create');

Route::delete('/comments',[CommentController::class,'delete'])->name('comment.delete');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');