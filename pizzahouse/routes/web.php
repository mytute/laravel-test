<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\PizzarController;
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
    return view('welcome');
});

Route::get('/pizzahouse', function () {
    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'gralic crust'],
        ['type' => 'veg supreme', 'base' => 'thin & crispy'],
    ];

    return view('pizza', ['pizzas' => $pizzas]);
});

// Route::get('/qpizz/{id}', PizzarController@index);
Route::get('/qpizz/{id}', [PizzarController::class, 'index']);


Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::get('/{id}', [BlogController::class, 'show']);
});

Route::fallback(FallbackController::class);
