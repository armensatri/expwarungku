<?php

use Illuminate\Support\Facades\Route;

Route::get('/default', function () {
  return view('welcome');
});
