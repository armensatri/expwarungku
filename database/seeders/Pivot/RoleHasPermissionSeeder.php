<?php

namespace Database\Seeders\Pivot;

use Illuminate\Database\Seeder;
use App\Models\Manageuser\Role;
use App\Models\Manageuser\Permission;

class RoleHasPermissionSeeder extends Seeder
{
  public function run(): void
  {
    $roles = [
      'owner',
      'superadmin',
      'admin',
      'member'
    ];

    foreach ($roles as $roleName) {
      Role::firstOrCreate(
        ['name' => $roleName],
        ['guard_name' => 'web']
      );
    }

    $roleHasPermissions = [
      'owner' => [
        // 'home',
        // 'login',
        // 'login.store',
        // 'register',
        // 'register.store',
        // 'auth.logout',

        'profile',
        'profile.edit',
        'profile.update',
        'password.edit',
        'password.update',

        // 'blocked',
        // 'blocked.permission',

        // 'owner',
        // 'superadmin',
        // 'admin',
        // 'member',

        'access.menu',
        'access.up.menu',
        'access.submenu',
        'access.up.submenu',
        'access.permission',
        'access.up.permission',

        'data',

        'visitor',
        'visitor.online',
        'visitor.offline',

        'access',
        'statistik',

        'menus.index',
        'menus.create',
        'menus.store',
        'menus.show',
        'menus.edit',
        'menus.update',
        'menus.destroy',

        'submenus.index',
        'submenus.create',
        'submenus.store',
        'submenus.show',
        'submenus.edit',
        'submenus.update',
        'submenus.destroy',

        'users.index',
        'users.create',
        'users.store',
        'users.show',
        'users.edit',
        'users.update',
        'users.destroy',

        'roles.index',
        'roles.create',
        'roles.store',
        'roles.show',
        'roles.edit',
        'roles.update',
        'roles.destroy',

        'permissions.index',
        'permissions.create',
        'permissions.store',
        'permissions.show',
        'permissions.edit',
        'permissions.update',
        'permissions.destroy',

        'statuses.index',
        'statuses.create',
        'statuses.store',
        'statuses.show',
        'statuses.edit',
        'statuses.update',
        'statuses.destroy',
      ],

      'superadmin' => [
        // 'home',
        // 'login',
        // 'login.store',
        // 'register',
        // 'register.store',
        // 'auth.logout',

        'profile',
        'profile.edit',
        'profile.update',
        'password.edit',
        'password.update',

        // 'blocked',
        // 'blocked.permission',

        // 'owner',
        // 'superadmin',
        // 'admin',
        // 'member',

        'access.menu',
        'access.up.menu',
        'access.submenu',
        'access.up.submenu',
        'access.permission',
        'access.up.permission',

        'data',

        'visitor',
        'visitor.online',
        'visitor.offline',

        'access',
        'statistik',

        'menus.index',
        'menus.create',
        'menus.store',
        'menus.show',
        'menus.edit',
        'menus.update',
        'menus.destroy',

        'submenus.index',
        'submenus.create',
        'submenus.store',
        'submenus.show',
        'submenus.edit',
        'submenus.update',
        'submenus.destroy',

        'users.index',
        'users.create',
        'users.store',
        'users.show',
        'users.edit',
        'users.update',
        'users.destroy',

        'roles.index',
        'roles.create',
        'roles.store',
        'roles.show',
        'roles.edit',
        'roles.update',
        'roles.destroy',

        'permissions.index',
        'permissions.create',
        'permissions.store',
        'permissions.show',
        'permissions.edit',
        'permissions.update',
        'permissions.destroy',

        'statuses.index',
        'statuses.create',
        'statuses.store',
        'statuses.show',
        'statuses.edit',
        'statuses.update',
        'statuses.destroy',
      ],

      'admin' => [
        // 'home',
        // 'login',
        // 'login.store',
        // 'register',
        // 'register.store',
        // 'auth.logout',

        'profile',
        'profile.edit',
        'profile.update',
        'password.edit',
        'password.update',

        // 'blocked',
        // 'blocked.permission',

        // 'owner',
        // 'superadmin',
        // 'admin',
        // 'member',

        // 'access.menu',
        // 'access.up.menu',
        // 'access.submenu',
        // 'access.up.submenu',
        // 'access.permission',
        // 'access.up.permission',

        // 'data',

        // 'visitor',
        // 'visitor.online',
        // 'visitor.offline',

        // 'access',
        // 'statistik',

        // 'menus.index',
        // 'menus.create',
        // 'menus.store',
        // 'menus.show',
        // 'menus.edit',
        // 'menus.update',
        // 'menus.destroy',

        // 'submenus.index',
        // 'submenus.create',
        // 'submenus.store',
        // 'submenus.show',
        // 'submenus.edit',
        // 'submenus.update',
        // 'submenus.destroy',

        // 'users.index',
        // 'users.create',
        // 'users.store',
        // 'users.show',
        // 'users.edit',
        // 'users.update',
        // 'users.destroy',

        // 'roles.index',
        // 'roles.create',
        // 'roles.store',
        // 'roles.show',
        // 'roles.edit',
        // 'roles.update',
        // 'roles.destroy',

        // 'permissions.index',
        // 'permissions.create',
        // 'permissions.store',
        // 'permissions.show',
        // 'permissions.edit',
        // 'permissions.update',
        // 'permissions.destroy',

        // 'statuses.index',
        // 'statuses.create',
        // 'statuses.store',
        // 'statuses.show',
        // 'statuses.edit',
        // 'statuses.update',
        // 'statuses.destroy',
      ],

      'member' => [
        // 'home',
        // 'login',
        // 'login.store',
        // 'register',
        // 'register.store',
        // 'auth.logout',

        'profile',
        'profile.edit',
        'profile.update',
        'password.edit',
        'password.update',

        // 'blocked',
        // 'blocked.permission',

        // 'owner',
        // 'superadmin',
        // 'admin',
        // 'member',

        // 'access.menu',
        // 'access.up.menu',
        // 'access.submenu',
        // 'access.up.submenu',
        // 'access.permission',
        // 'access.up.permission',

        // 'data',

        // 'visitor',
        // 'visitor.online',
        // 'visitor.offline',

        // 'access',
        // 'statistik',

        // 'menus.index',
        // 'menus.create',
        // 'menus.store',
        // 'menus.show',
        // 'menus.edit',
        // 'menus.update',
        // 'menus.destroy',

        // 'submenus.index',
        // 'submenus.create',
        // 'submenus.store',
        // 'submenus.show',
        // 'submenus.edit',
        // 'submenus.update',
        // 'submenus.destroy',

        // 'users.index',
        // 'users.create',
        // 'users.store',
        // 'users.show',
        // 'users.edit',
        // 'users.update',
        // 'users.destroy',

        // 'roles.index',
        // 'roles.create',
        // 'roles.store',
        // 'roles.show',
        // 'roles.edit',
        // 'roles.update',
        // 'roles.destroy',

        // 'permissions.index',
        // 'permissions.create',
        // 'permissions.store',
        // 'permissions.show',
        // 'permissions.edit',
        // 'permissions.update',
        // 'permissions.destroy',

        // 'statuses.index',
        // 'statuses.create',
        // 'statuses.store',
        // 'statuses.show',
        // 'statuses.edit',
        // 'statuses.update',
        // 'statuses.destroy',
      ],
    ];

    foreach ($roleHasPermissions as $roleName => $permissions) {
      $role = Role::where('name', $roleName)->first();

      if (!$role) {
        continue;
      }

      foreach ($permissions as $permissionName) {
        Permission::firstOrCreate(
          ['name' => $permissionName],
          ['guard_name' => 'web']
        );
      }

      $permissionIds = Permission::whereIn('name', $permissions)
        ->pluck('id');

      $role->permissions()->sync($permissionIds);
    }
  }
}
