<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CommentController;

// user
Route::get('/', [RecipeController::class,'pengguna'])->name('index');
Route::get('/recipes/{id}', [RecipeController::class, 'tampil'])->name('recipes.tampil');
Route::post('/search', [RecipeController::class,'search'])->name('recipes.search');
Route::get('/about',[RecipeController::class,'about'])->name('about');
Route::post('/recipes/{recipe}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/comments/{comment}/delete', [CommentController::class, 'destroy'])->name('comments.destroy');

// admin
Route::get('/dashboard', [RecipeController::class, 'index'])->name('dashboard');
Route::get('/create', [RecipeController::class,'create'])->name('create');
Route::post('/recipe/store', [RecipeController::class,'store']);

Route::get('/manage', [RecipeController::class,'edit'])->name('manage');

Route::delete('/edit/detele/{recipe}', [RecipeController::class,'destroy'])->name('delete');

Route::get('/edit/recipes/{recipe}', [RecipeController::class,'show'])->name('show.edit');
Route::put('/update/recipe/{recipe}', [RecipeController::class,'update'])->name('recipes.update');

// Auth
Route::get('/login', [LoginController::class,'index']);
Route::post('/login/auth', [LoginController::class,'login']);
Route::post('/login/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index']);
Route::post('/register/auth', [RegisterController::class,'register']);


