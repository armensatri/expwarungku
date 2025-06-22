<?php

namespace App\Enums;

class MenuIcon
{
  public static function get(string $name): string
  {

    $icons = [
      // DASHBOARD
      'owner' => 'dashboard.jpg',
      'superadmin' => 'dashboard.jpg',
      'admin' => 'dashboard.jpg',
      'member' => 'dashboard.jpg',

      // ACCOUNT
      'profile' => 'profile.jpg',
      'profile edit' => 'profile-edit.png',
      'change password' => 'change-password.jpg',

      // MANAGEDATA
      'data' => 'data.png',
      'visitor' => 'visitor.jpg',
      'device' => 'device.png',
      'access' => 'access.png',
      'logdata' => 'logdata.png',
      'statistik' => 'statistik.jpg',
      'verification' => 'verification.png',

      // MANAGEUSER
      'users' => 'users.jpg',
      'roles' => 'roles.jpg',
      'permissions' => 'permissions.jpg',

      // MANAGEMENU
      'menus' => 'menus.jpg',
      'submenus' => 'submenus.jpg',

      // PUBLISHED
      'statuses' => 'statuses.jpg',
    ];

    $filename = $icons[strtolower($name)] ?? '';
    return "/backend/img/menu/{$filename}";
  }
}
