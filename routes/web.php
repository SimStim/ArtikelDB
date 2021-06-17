<?php
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
Route::get('/', function () {
    return view('welcome');
});
Route::get('/item', [
    \App\Http\Controllers\itemController::class,
    'index'
]);
Route::get('/item/create', [
    \App\Http\Controllers\itemController::class,
    'create'
]); // shows create item form
Route::post('/item/create', [
    \App\Http\Controllers\itemController::class,
    'store'
]); // saves the created item to the databse
Route::get('/item/{item}/edit', [
    \App\Http\Controllers\itemController::class,
    'edit'
]); // shows edit item form
Route::put('/item/{item}/edit', [
    \App\Http\Controllers\itemController::class,
    'update'
]); // commits edited item to the database
Route::get('/item/{item}', [
    \App\Http\Controllers\itemController::class,
    'show'
]); // display item
Route::delete('/item/{item}', [
    \App\Http\Controllers\itemController::class,
    'destroy'
]); //deletes item from the database
