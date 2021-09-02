<?php

use App\Http\Controllers\ColorController;
use App\Models\Color;
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

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/color', function () {
    $color = Color::all();
    return view('color', compact("color"));
});

// Route::resource('/color', ColorController::class);
