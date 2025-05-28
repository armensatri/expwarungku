<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\Managedata\{
  DataController,
  AccessController,
};

Route::group(
  [
    'middleware' => [
      'auth',
      'submenu.access',
      'permission',
    ]
  ],
  function () {
    Route::get('/data', [DataController::class, 'index'])
      ->name('data');

    Route::get('/access', [AccessController::class, 'index'])
      ->name('access');
  }
);
