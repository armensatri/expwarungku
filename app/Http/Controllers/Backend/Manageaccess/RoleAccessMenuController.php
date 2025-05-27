<?php

namespace App\Http\Controllers\Backend\Manageaccess;

use Illuminate\Http\Request;
use App\Models\Managemenu\Menu;
use App\Models\Manageuser\Role;
use App\Http\Controllers\Controller;

class RoleAccessMenuController extends Controller
{
  public function accessMenu($url)
  {
    $role = Role::where('url', $url)
      ->with('menus:id')
      ->firstOrFail();

    $assignedMenusIds = $role->menus->pluck('id')->all();

    $menus = Menu::query()
      ->select(['id', 'sm', 'name', 'url'])
      ->orderBy('sm', 'asc')
      ->paginate(15)
      ->withQueryString();

    return view('backend.manageaccess.role-access-menu', [
      'title' => 'Access menu ' . $role->name,
      'role' => $role,
      'menus' => $menus,
      'assignedMenusIds' => $assignedMenusIds
    ]);
  }
}
