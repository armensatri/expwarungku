<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Contents\Pointofsales\{
  CategoriesController,
};

Route::group(
  [
    'middleware' => [
      'auth',
    ]
  ],
  function () {
    Route::get('/categories/slug', [CategoriesController::class, 'slug']);
  }
);

Route::group(
  [
    'middleware' => [
      'auth',
      'submenu.access',
      'permission',
    ]
  ],
  function () {
    Route::resources([
      '/categories' => CategoriesController::class,
    ]);
  }
);
