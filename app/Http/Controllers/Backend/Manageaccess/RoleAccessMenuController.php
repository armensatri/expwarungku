<?php

namespace App\Http\Controllers\Backend\Manageaccess;

use Illuminate\Http\Request;
use App\Models\Managemenu\Menu;
use App\Models\Manageuser\Role;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RoleAccessMenuController extends Controller
{
  public function accessMenu($url)
  {
    $role = Role::query()->where('url', $url)
      ->with('menus:id')
      ->firstOrFail();

    $menus = Menu::query()
      ->select(['id', 'sm', 'name', 'url'])
      ->orderBy('sm', 'asc')
      ->paginate(15)
      ->withQueryString();

    return view('backend.manageaccess.role-access-menu', [
      'title' => "Access menu {$role->name}",
      'role' => $role,
      'menus' => $menus,
    ]);
  }

  public function accessUpMenu(Request $request)
  {
    $roleId = $request->role_id;
    $menuId = $request->menu_id;

    $data = [
      'role_id' => $roleId,
      'menu_id' => $menuId
    ];

    $exists = DB::table('role_has_menu')->where($data)->exists();

    if ($exists) {
      DB::table('role_has_menu')->where($data)->delete();
      $message = 'Data menu! berhasil dihapus!';
    } else {
      DB::table('role_has_menu')->insert($data);
      $message = 'Data menu! berhasil ditambahkan!';
    }

    return response()->json([
      'success' => true,
      'message' => $message
    ]);
  }
}
