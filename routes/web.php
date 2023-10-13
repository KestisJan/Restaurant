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

Route::get('/', function () {
    $menuItems = DB::table('meniu')->get();

    return view('listings', [
        'heading' => 'Menu',
        'meniu' => $menuItems,
    ]);
});
// Categories Routes
// Categories create route
Route::get('/categories/create', [CategoriesController::class, 'create']);
// Categories store route
Route::post('/categories', [CategoriesController::class, 'store']);


// Meniu-Items Routes
// Meniu-Items create form route
Route::get('/meniu-items/create', [MeniuItemsController::class, 'create']);
// Meniu-Items store route
Route::post('/meniu-items', [MeniuItemsController::class, 'store']);



