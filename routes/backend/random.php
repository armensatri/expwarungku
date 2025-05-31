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
        Route::get('/data/count', 'count')->name('data.count');
        Route::get('/data/statistic', 'statistic')->name('data.statistic');
        Route::get('/data/visitor', 'visitor')->name('data.visitor');
      }
    );
  }
);
