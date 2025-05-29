<?php

namespace App\Http\Controllers\Backend\Manageaccess;

use Illuminate\Http\Request;
use App\Models\Manageuser\Role;
use App\Http\Controllers\Controller;
use App\Models\Manageuser\Permission;

class RoleAccessPermissionController extends Controller
{
  public function accessPermission($url)
  {
    $role = Role::query()->where('url', $url)
      ->with('permissions:id')
      ->firstOrFail();

    $permissions = Permission::query()
      ->select('id', 'name')
      ->orderBy('id', 'asc')
      ->get();

    $groupper = $permissions->sortBy('id')->groupBy(
      function ($permission) {
        $controller = explode('.', $permission->name)[0];
        return ucfirst($controller);
      }
    );

    return view('backend.manageaccess.role-access-permission', [
      'title' => "Access permission {$role->name}",
      'role' => $role,
      'groupper' => $groupper
    ]);
  }
}
