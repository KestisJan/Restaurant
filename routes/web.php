<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\MeniuItemsController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


// Categories Routes

// Categories index route
Route::get('/', [CategoriesController::class, 'index']);
// Categories create route
Route::get('/categories/create', [CategoriesController::class, 'create']);
// Categories store route
Route::post('/categories', [CategoriesController::class, 'store']);
// Categories delete route
Route::delete('/categories/{categories}', [CategoriesController::class, 'destroy']);


// Meniu-Items Routes

// Meniu-Items create form route
Route::get('/meniu-items/create', [MeniuItemsController::class, 'create']);
// Meniu-Items store route
Route::post('/meniu-items', [MeniuItemsController::class, 'store']);
// Meniu-Items edit route
Route::get('/meniu-items/{meniuItem}/edit', [MeniuItemsController::class, 'edit']);
// Meniu-Items update route
Route::put('/meniu-items/{meniuItem}', [MeniuItemsController::class, 'update']);
// Meniu-Items delete route
Route::delete('meniu-items/{meniuItem}', [MeniuItemsController::class, 'destroy']);


// Career Routes
// Career index route
Route::get('/career/index', [CareerController::class, 'index'])->name('applicants.index');
// Career create route
Route::get('/career/apply', [CareerController::class, 'create']);
// Career store route
Route::post('/career', [CareerController::class, 'store']);
// Career download route
Route::get('/download-file/{filename}', [CareerController::class, 'download'])->name('file.download')->where('filename', '(.*)');
// Career delete route
Route::delete('career/{career}', [CareerController::class, 'destroy']);


// Admin Routes
// Admin register
Route::get('/admin/register', [AdminController::class, 'register']);
// Admin Login Route
Route::get('/admin/login', [AdminController::class, 'login'])->name('login');
// Admin Log IN
Route::post('/admin/authenticate', [AdminController::class, 'authenticate']);
// Admin Log OUT
Route::post('/logout', [AdminController::class, 'logout']);


