<?php

namespace App\Enums;

class MenuIcon
{
  public static function get(string $name): string
  {
    $icons = [
      'owner' => 'dashboard.jpg',
      'superadmin' => 'dashboard.jpg',
      'member' => 'dashboard.jpg'
    ];

    $filename = $icons[strtolower($name)] ?? '';
    return "/backend/img/menu{$filename}";
  }
}
