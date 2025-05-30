<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\Managemenu\{
  MenusController,
  SubmenusController
};

Route::group(
  [
    'middleware' => [
      'auth',
    ]
  ],
  function () {
    Route::get('/menus/slug', [MenusController::class, 'slug']);
    Route::get('/submenus/slug', [SubmenusController::class, 'slug']);
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
      '/menus' => MenusController::class,
      '/submenus' => SubmenusController::class,
    ]);
  }
);
