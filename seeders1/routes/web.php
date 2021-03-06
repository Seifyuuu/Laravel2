<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, "index"])->name("home");    
Route::delete("/{id}/delete", [HomeController::class, "delete"])->name("delete");
Route::get("/{id}/edit", [HomeController::class, "edit"])->name("edit");
Route::put('/{id}/update', [HomeController::class, 'update'])->name('update');



