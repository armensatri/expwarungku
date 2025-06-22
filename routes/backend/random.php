<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\Managedata\VisitorController;

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
     * * SUBMENU {VISITOR} & {VisitorController}
     * * METHOD TAMBAHAN DI SUBMENU {VISITOR} & {VisitorController}
     * */
    Route::controller(VisitorController::class)->group(
      function () {
        Route::get('/visitor/online', 'online')
          ->name('visitor.online');
        Route::get('/visitor/offline', 'offline')
          ->name('visitor.offline');
      }
    );
  }
);
