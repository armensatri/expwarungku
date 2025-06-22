<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\Managedata\{
  DataController,
  VisitorController,
  AccessController,
  StatistikController,
};

Route::group(
  [
    'middleware' => [
      'auth',
      'submenu.access',
      'permission'
    ]
  ],
  function () {
    Route::get('/data', [DataController::class, 'index'])
      ->name('data');

    Route::get('/visitor', [VisitorController::class, 'index'])
      ->name('visitor');

    Route::get('/access', [AccessController::class, 'index'])
      ->name('access');

    Route::get('/statistik', [StatistikController::class, 'index'])
      ->name('statistik');
  }
);
