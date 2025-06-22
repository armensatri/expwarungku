<?php

namespace Database\Seeders\Pivot;

use Illuminate\Database\Seeder;
use App\Models\Managemenu\Menu;
use App\Models\Manageuser\Role;

class RoleHasMenuSeeder extends Seeder
{
  public function run(): void
  {
    $roles = Role::whereIn('name', [
      'owner',
      'superadmin',
      'admin',
      'member',
    ])->get()->keyBy('name');

    $menus = Menu::whereIn('name', [
      'owner',
      'superadmin',
      'admin',
      'member',
      'account',
      'managedata',
      'manageuser',
      'managemenu',
      'published',
    ])->get()->keyBy('name');

    $roleHasMenus = [
      'owner' => [
        'owner',
        // 'superadmin',
        // 'admin',
        // 'member',
        'account',
        'managedata',
        'manageuser',
        'managemenu',
        'published',
      ],

      'superadmin' => [
        // 'owner',
        'superadmin',
        // 'admin',
        // 'member',
        'account',
        'managedata',
        'manageuser',
        'managemenu',
        'published',
      ],

      'admin' => [
        // 'owner',
        // 'superadmin',
        'admin',
        // 'member',
        'account',
        // 'managedata',
        // 'manageuser',
        // 'managemenu',
        // 'published',
      ],

      'member' => [
        // 'owner',
        // 'superadmin',
        // 'admin',
        'member',
        'account',
        // 'managedata',
        // 'manageuser',
        // 'managemenu',
        // 'published',
      ],
    ];

    foreach ($roleHasMenus as $roleName => $menuNames) {
      if (isset($roles[$roleName])) {
        $menuIds = collect($menuNames)
          ->filter(fn($menuName) => isset($menus[$menuName]))
          ->map(fn($menuName) => $menus[$menuName]->id)
          ->toArray();

        $roles[$roleName]->menus()->attach($menuIds);
      }
    }
  }
}
