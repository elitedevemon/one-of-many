<?php

use App\Http\Controllers\CustomerOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::resource('relation', CustomerOrderController::class);