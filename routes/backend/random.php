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
     * * MENU {?}
     * * SUBMENU {?} & {?Controller}
     * * METHOD TAMBAHAN DI SUBMENU {?} & {?Controller}
     * */
    Route::controller(DataController::class)->group(
      function () {
        //
      }
    );
  }
);
