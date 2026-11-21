<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::resource('item', ItemController::class);
