<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [ProductController::class, 'index']);
Route::get('product/{id}', [ProductController::class, 'show']);
Route::get('category/{slug}', [ProductController::class, 'category']);
Route::get('merk/{slug}', [ProductController::class, 'merk']);
Route::get('type/{slug}', [ProductController::class, 'type']);
