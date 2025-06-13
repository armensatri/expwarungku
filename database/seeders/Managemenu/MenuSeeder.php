<?php

namespace Database\Seeders\Managemenu;

use Illuminate\Database\Seeder;
use App\Models\Managemenu\Menu;

class MenuSeeder extends Seeder
{
  public function run(): void
  {
    $menus = [
      [
        'sm' => 1,
        'name' => 'owner',
        'slug' => 'owner',
        'description' => 'menu owner'
      ],

      [
        'sm' => 2,
        'name' => 'superadmin',
        'slug' => 'superadmin',
        'description' => 'menu superadmin'
      ],

      [
        'sm' => 3,
        'name' => 'admin',
        'slug' => 'admin',
        'description' => 'menu admin'
      ],

      [
        'sm' => 4,
        'name' => 'member',
        'slug' => 'member',
        'description' => 'menu member'
      ],

      [
        'sm' => 5,
        'name' => 'account',
        'slug' => 'account',
        'description' => 'menu account user'
      ],

      [
        'sm' => 6,
        'name' => 'managedata',
        'slug' => 'managedata',
        'description' => 'menu pengelolaan data'
      ],

      [
        'sm' => 7,
        'name' => 'manageuser',
        'slug' => 'manageuser',
        'description' => 'menu pengelolaan user'
      ],

      [
        'sm' => 8,
        'name' => 'managemenu',
        'slug' => 'managemenu',
        'description' => 'menu pengelolaan access menu'
      ],

      [
        'sm' => 9,
        'name' => 'published',
        'slug' => 'published',
        'description' => 'menu pengelolaan data publish'
      ],

      [
        'sm' => 10,
        'name' => 'point of sales',
        'slug' => 'point-of-sales',
        'description' => 'menu pengelolaan data point of sales'
      ],

      [
        'sm' => 11,
        'name' => 'transaction',
        'slug' => 'transaktion',
        'description' => 'menu pengelolaan data transaction'
      ],

      [
        'sm' => 12,
        'name' => 'report',
        'slug' => 'report',
        'description' => 'menu pengelolaan data report'
      ],
    ];

    foreach ($menus as $menu) {
      Menu::create($menu);
    }
  }
}
