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
    $role = Role::where('url', $url)
      ->with('menus:id')
      ->firstOrFail();

    $menus = Menu::query()
      ->select(['id', 'sm', 'name', 'url'])
      ->orderBy('sm', 'asc')
      ->paginate(15)
      ->withQueryString();

    return view('backend.manageaccess.role-access-menu', [
      'title' => 'Access menu ' . $role->name,
      'role' => $role,
      'menus' => $menus,
    ]);
  }

  public function accessUpMenu(Request $request)
  {
    // Ambil role_id dan menu_id dari request
    $roleId = $request->role_id;
    $menuId = $request->menu_id;

    // Data untuk operasi insert/delete
    $data = [
      'role_id' => $roleId,
      'menu_id' => $menuId
    ];

    // Periksa apakah data sudah ada di tabel pivot
    $exists = DB::table('role_has_menu')->where($data)->exists();

    if ($exists) {
      // Jika sudah ada, hapus data
      DB::table('role_has_menu')->where($data)->delete();
      $message = 'Data menu! berhasil dihapus!';
    } else {
      // Jika belum ada, tambahkan data
      DB::table('role_has_menu')->insert($data);
      $message = 'Data menu! berhasil ditambahkan!';
    }

    return response()->json([
      'success' => true,
      'message' => $message
    ]);
  }
}
