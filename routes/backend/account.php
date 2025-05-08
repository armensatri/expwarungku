<?php

use Illuminate\Support\Facades\Route;

Route::group(
  [
    'middleware' => [
      'auth',
      'permission',
      'submenu_access'
    ]
  ],
  function () {
    //
  }
);
