<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\Account\{
  ProfileController,
  ChangepasswordController
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
    Route::controller(ProfileController::class)->group(
      function () {
        Route::get('/profile', 'profile')->name('profile');
        Route::get('/profile/edit', 'edit')->name('profile.edit');
        Route::patch('/profile/update', 'update')->name('profile.update');
      }
    );

    Route::controller(ChangepasswordController::class)->group(
      function () {
        Route::get('/change/password/edit', 'edit')
          ->name('password.edit');
        Route::patch('/change/password/update', 'update')
          ->name('password.update');
      }
    );
  }
);
