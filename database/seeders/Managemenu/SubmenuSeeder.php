<?php

namespace Database\Seeders\Managemenu;

use Illuminate\Database\Seeder;
use App\Models\Managemenu\Submenu;

class SubmenuSeeder extends Seeder
{
  public function run(): void
  {
    $submenus = [
      // OWNER
      [
        'menu_id' => 1,
        'ssm' => 1,
        'name' => 'owner',
        'slug' => 'owner',
        'route' => '/owner',
        'active' => 'owner',
        'routename' => '/owner',
        'description' => 'dashboard owner'
      ],

      // SUPERADMIN
      [
        'menu_id' => 2,
        'ssm' => 1,
        'name' => 'superadmin',
        'slug' => 'superadmin',
        'route' => '/superadmin',
        'active' => 'superadmin',
        'routename' => '/superadmin',
        'description' => 'dashboard superadmin'
      ],

      // ADMIN
      [
        'menu_id' => 3,
        'ssm' => 1,
        'name' => 'admin',
        'slug' => 'admin',
        'route' => '/admin',
        'active' => 'admin',
        'routename' => '/admin',
        'description' => 'dashboard admin'
      ],

      // MEMBER
      [
        'menu_id' => 4,
        'ssm' => 1,
        'name' => 'member',
        'slug' => 'member',
        'route' => '/member',
        'active' => 'member',
        'routename' => '/member',
        'description' => 'dashboard member'
      ],

      // ACCOUNT
      [
        'menu_id' => 5,
        'ssm' => 1,
        'name' => 'profile',
        'slug' => 'profile',
        'route' => '/profile',
        'active' => 'profile',
        'routename' => '/profile',
        'description' => 'user profile'
      ],
      [
        'menu_id' => 5,
        'ssm' => 2,
        'name' => 'profile edit',
        'slug' => 'profile-edit',
        'route' => '/profile/edit',
        'active' => 'profile/edit',
        'routename' => '/profile/edit',
        'description' => 'edit profile user'
      ],
      [
        'menu_id' => 5,
        'ssm' => 3,
        'name' => 'change password',
        'slug' => 'change-password',
        'route' => '/change/password/edit',
        'active' => 'change/password/edit',
        'routename' => '/change/password/edit',
        'description' => 'change password user'
      ],

      // MANAGEDATA
      [
        'menu_id' => 6,
        'ssm' => 1,
        'name' => 'data',
        'slug' => 'data',
        'route' => '/data',
        'active' => 'data',
        'routename' => '/data',
        'description' => 'data count'
      ],
      [
        'menu_id' => 6,
        'ssm' => 2,
        'name' => 'visitor',
        'slug' => 'visitor',
        'route' => '/visitor',
        'active' => 'visitor',
        'routename' => '/visitor',
        'description' => 'data online or offline'
      ],
      [
        'menu_id' => 6,
        'ssm' => 3,
        'name' => 'access',
        'slug' => 'access',
        'route' => '/access',
        'active' => 'access',
        'routename' => '/access',
        'description' => 'pengelolaan access'
      ],
      [
        'menu_id' => 6,
        'ssm' => 4,
        'name' => 'statistik',
        'slug' => 'statistik',
        'route' => '/statistik',
        'active' => 'statistik',
        'routename' => '/statistik',
        'description' => 'data statistik'
      ],

      // MANAGEUSER
      [
        'menu_id' => 7,
        'ssm' => 1,
        'name' => 'users',
        'slug' => 'users',
        'route' => '/users',
        'active' => 'users',
        'routename' => '/users',
        'description' => 'data users'
      ],
      [
        'menu_id' => 7,
        'ssm' => 2,
        'name' => 'roles',
        'slug' => 'roles',
        'route' => '/roles',
        'active' => 'roles',
        'routename' => '/roles',
        'description' => 'data roles'
      ],
      [
        'menu_id' => 7,
        'ssm' => 3,
        'name' => 'permissions',
        'slug' => 'permissions',
        'route' => '/permissions',
        'active' => 'permissions',
        'routename' => '/permissions',
        'description' => 'data permissions'
      ],

      // MANAGEMENU
      [
        'menu_id' => 8,
        'ssm' => 1,
        'name' => 'menus',
        'slug' => 'menus',
        'route' => '/menus',
        'active' => 'menus',
        'routename' => '/menus',
        'description' => 'data menus'
      ],
      [
        'menu_id' => 8,
        'ssm' => 2,
        'name' => 'submenus',
        'slug' => 'submenus',
        'route' => '/submenus',
        'active' => 'submenus',
        'routename' => '/submenus',
        'description' => 'data submenus'
      ],

      [
        'menu_id' => 9,
        'ssm' => 1,
        'name' => 'statuses',
        'slug' => 'statuses',
        'route' => '/statuses',
        'active' => 'statuses',
        'routename' => '/statuses',
        'description' => 'data statuses'
      ],

      [
        'menu_id' => 10,
        'ssm' => 1,
        'name' => 'categories',
        'slug' => 'categories',
        'route' => '/categories',
        'active' => 'categories',
        'routename' => '/categories',
        'description' => 'data categories'
      ],
      [
        'menu_id' => 10,
        'ssm' => 2,
        'name' => 'products',
        'slug' => 'products',
        'route' => '/products',
        'active' => 'products',
        'routename' => '/products',
        'description' => 'data products'
      ],
      [
        'menu_id' => 10,
        'ssm' => 3,
        'name' => 'members',
        'slug' => 'members',
        'route' => '/members',
        'active' => 'members',
        'routename' => '/members',
        'description' => 'data members'
      ],
      [
        'menu_id' => 10,
        'ssm' => 4,
        'name' => 'suppliers',
        'slug' => 'suppliers',
        'route' => '/suppliers',
        'active' => 'suppliers',
        'routename' => '/suppliers',
        'description' => 'data suppliers'
      ],

      [
        'menu_id' => 11,
        'ssm' => 1,
        'name' => 'pengeluaran',
        'slug' => 'pengeluaran',
        'route' => '/pengeluaran',
        'active' => 'pengeluaran',
        'routename' => '/pengeluaran',
        'description' => 'data pengeluaran'
      ],
      [
        'menu_id' => 11,
        'ssm' => 2,
        'name' => 'pembelian',
        'slug' => 'pembelian',
        'route' => '/pembelian',
        'active' => 'pembelian',
        'routename' => '/pembelian',
        'description' => 'data pembelian'
      ],
      [
        'menu_id' => 11,
        'ssm' => 3,
        'name' => 'penjualan',
        'slug' => 'penjualan',
        'route' => '/penjualan',
        'active' => 'penjualan',
        'routename' => '/penjualan',
        'description' => 'data penjualan'
      ],
      [
        'menu_id' => 11,
        'ssm' => 4,
        'name' => 'transaksi lama',
        'slug' => 'transaksi-lama',
        'route' => '/transaksi-lama',
        'active' => 'transaksi-lama',
        'routename' => '/transaksi-lama',
        'description' => 'data transaksi lama'
      ],
      [
        'menu_id' => 11,
        'ssm' => 5,
        'name' => 'transaksi baru',
        'slug' => 'transaksi-baru',
        'route' => '/transaksi-baru',
        'active' => 'transaksi-baru',
        'routename' => '/transaksi-baru',
        'description' => 'data transaksi baru'
      ],

      [
        'menu_id' => 12,
        'ssm' => 1,
        'name' => 'laporan',
        'slug' => 'laporan',
        'route' => '/laporan',
        'active' => 'laporan',
        'routename' => '/laporan',
        'description' => 'data laporan'
      ],
    ];

    foreach ($submenus as $submenu) {
      Submenu::create($submenu);
    }
  }
}
