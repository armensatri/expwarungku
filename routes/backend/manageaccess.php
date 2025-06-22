<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\Manageaccess\{
  RoleAccessMenuController,
  RoleAccessSubmenuController,
  RoleAccessPermissionController
};

Route::group(
  [
    'middleware' => [
      'auth',
      'permission',
    ]
  ],
  function () {
    Route::controller(RoleAccessMenuController::class)
      ->group(
        function () {
          Route::get(
            '/access/menu/role/{url}',
            'accessMenu'
          )->name('access.menu');
          Route::post(
            '/access/menu/role',
            'accessUpMenu'
          )->name('access.up.menu');
        }
      );

    Route::controller(RoleAccessSubmenuController::class)
      ->group(
        function () {
          Route::get(
            '/access/submenu/role/{url}',
            'accessSubmenu'
          )->name('access.submenu');
          Route::post(
            '/access/submenu/role',
            'accessUpSubmenu'
          )->name('access.up.submenu');
        }
      );

    Route::controller(RoleAccessPermissionController::class)
      ->group(
        function () {
          Route::get(
            '/access/permission/role/{url}',
            'accessPermission'
          )->name('access.permission');
          Route::post(
            '/access/permission/role',
            'accessUpPermission'
          )->name('access.up.permission');
        }
      );
  }
);
