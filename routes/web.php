<?php

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



