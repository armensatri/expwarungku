<?php

namespace App\Http\Controllers\Backend\Manageaccess;

use Illuminate\Http\Request;
use App\Models\Manageuser\Role;
use App\Models\Managemenu\Submenu;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RoleAccessSubmenuController extends Controller
{
  public function accessSubmenu($url)
  {
    $role = Role::query()->where('url', $url)
      ->with('submenus:id')
      ->firstOrFail();

    $submenus = Submenu::query()
      ->select(['id', 'ssm', 'name', 'url'])
      ->orderBy('sm', 'asc')
      ->paginate(15)
      ->withQueryString();

    return view('backend.manageaccess.role-access-submenu', [
      'title' => "Access submenu {$role->name}",
      'role' => $role,
      'submenus' => $submenus,
    ]);
  }

  public function accessUpSubmenu(Request $request)
  {
    $roleId = $request->role_id;
    $submenuId = $request->submenu_id;

    $data = [
      'role_id' => $roleId,
      'submenu_id' => $submenuId
    ];

    $exists = DB::table('role_has_submenu')->where($data)->exists();

    if ($exists) {
      DB::table('role_has_submenu')->where($data)->delete();
      $message = 'Data submenu! berhasil dihapus!';
    } else {
      DB::table('role_has_submenu')->insert($data);
      $message = 'Data submenu! berhasil ditambahkan!';
    }

    return response()->json([
      'success' => true,
      'message' => $message
    ]);
  }
}
