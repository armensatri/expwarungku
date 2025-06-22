<?php

namespace Database\Seeders\Pivot;

use Illuminate\Database\Seeder;
use App\Models\Manageuser\Role;
use App\Models\Managemenu\Submenu;

class RoleHasSubmenuSeeder extends Seeder
{
  public function run(): void
  {
    $roles = Role::whereIn('name', [
      'owner',
      'superadmin',
      'admin',
      'member'
    ])->get()->keyBy('name');

    $submenus = Submenu::whereIn('name', [
      // ACCOUNT
      'profile',
      'profile edit',
      'change password',

      // MANAGEDATA
      'data',
      'visitor',
      'access',
      'statistik',

      // MANAGEUSER
      'users',
      'roles',
      'permissions',

      // MANAGEMENU
      'menus',
      'submenus',

      // PUBLISHED
      'statuses',

      // POINT OF SALES
      'categories',
      'products',
      'members',
      'suppliers',

      // TRANSACTION
      'pengeluaran',
      'pembelian',
      'penjualan',
      'transaksi lama',
      'transaksi baru',

      // REPORT
      'laporan',
    ])->get()->keyBy('name');

    $roleHasSubmenus = [
      'owner' => [
        // ACCOUNT
        'profile',
        'profile edit',
        'change password',

        // MANAGEDATA
        'data',
        'visitor',
        'access',
        'statistik',

        // MANAGEUSER
        'users',
        'roles',
        'permissions',

        // MANAGEMENU
        'menus',
        'submenus',

        // PUBLISHED
        'statuses',

        // POINT OF SALES
        'categories',
        'products',
        'members',
        'suppliers',

        // TRANSACTION
        'pengeluaran',
        'pembelian',
        'penjualan',
        'transaksi lama',
        'transaksi baru',

        // REPORT
        'laporan',
      ],

      'superadmin' => [
        // ACCOUNT
        'profile',
        'profile edit',
        'change password',

        // MANAGEDATA
        'data',
        'visitor',
        'access',
        'statistik',

        // MANAGEUSER
        'users',
        'roles',
        'permissions',

        // MANAGEMENU
        'menus',
        'submenus',

        // PUBLISHED
        'statuses',

        // POINT OF SALES
        'categories',
        'products',
        'members',
        'suppliers',

        // TRANSACTION
        'pengeluaran',
        'pembelian',
        'penjualan',
        'transaksi lama',
        'transaksi baru',

        // REPORT
        'laporan',
      ],

      'admin' => [
        // ACCOUNT
        'profile',
        'profile edit',
        'change password',

        // MANAGEDATA
        // 'data',
        // 'visitor',
        // 'access',
        // 'statistik',

        // MANAGEUSER
        // 'users',
        // 'roles',
        // 'permissions',

        // MANAGEMENU
        // 'menus',
        // 'submenus',

        // PUBLISHED
        // 'statuses',

        // POINT OF SALES
        // 'categories',
        // 'products',
        // 'members',
        // 'suppliers',

        // TRANSACTION
        // 'pengeluaran',
        // 'pembelian',
        // 'penjualan',
        // 'transaksi lama',
        // 'transaksi baru',

        // REPORT
        // 'laporan',
      ],

      'member' => [
        // ACCOUNT
        'profile',
        'profile edit',
        'change password',

        // MANAGEDATA
        // 'data',
        // 'visitor',
        // 'access',
        // 'statistik',

        // MANAGEUSER
        // 'users',
        // 'roles',
        // 'permissions',

        // MANAGEMENU
        // 'menus',
        // 'submenus',

        // PUBLISHED
        // 'statuses',

        // POINT OF SALES
        // 'categories',
        // 'products',
        // 'members',
        // 'suppliers',

        // TRANSACTION
        // 'pengeluaran',
        // 'pembelian',
        // 'penjualan',
        // 'transaksi lama',
        // 'transaksi baru',

        // REPORT
        // 'laporan',
      ],
    ];

    foreach ($roleHasSubmenus as $roleName => $submenuNames) {
      if (isset($roles[$roleName])) {
        $submenuIds = collect($submenuNames)
          ->filter(fn($name) => isset($submenus[$name]))
          ->map(fn($name) => $submenus[$name]->id)
          ->toArray();

        $roles[$roleName]->submenus()->syncWithoutDetaching($submenuIds);
      }
    }
  }
}
