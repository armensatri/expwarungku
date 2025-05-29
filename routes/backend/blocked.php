<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Blocked\BlockedController;

Route::controller(BlockedController::class)->group(
  function () {
    Route::get('/blocked', 'blocked')
      ->name('blocked');
    Route::get('/blocked-permission', 'blockedPermission')
      ->name('blocked.permission');
  }
);
