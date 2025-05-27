<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\Managedata\{
  DataController,
};

Route::group(
  [
    'middleware' => [
      'auth',
      'permission',
    ]
  ],
  function () {
    /**
     * * MENU {MANAGEDATA}
     * * SUBMENU {DATA} & {DataController}
     * * METHOD TAMBAHAN DI SUBMENU {DATA} & {DataController}
     * */
    Route::controller(DataController::class)->group(
      function () {
        Route::get('/example', 'example')->name('data.example');
      }
    );
  }
);
