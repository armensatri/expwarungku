<?php

namespace App\Http\Controllers\Backend\Manageuser;

use Illuminate\Http\Request;
use App\Models\Manageuser\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Manageuser\Role\RoleSr;
use App\Http\Requests\Manageuser\Role\RoleUr;
use Cviebrock\EloquentSluggable\Services\SlugService;

class RolesController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $search = request('search');
    $page = request('page', 1);
    $cacheVersion = Cache::get('roles_cache_version', 1);

    $cachekey =
      "roles_v{$cacheVersion}:search:{$search}:page:{$page}";

    $roles = Cache::remember(
      $cachekey,
      now()->addMinutes(5),
      function () {
        return Role::search(request(['search']))
          ->select(['id', 'sr', 'name', 'bg', 'text', 'description', 'url'])
          ->orderBy('sr', 'asc')
          ->paginate(10)
          ->withQueryString();
      }
    );

    return view('backend.manageuser.roles.index', [
      'title' => 'Semua data roles',
      'roles' => $roles
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.manageuser.roles.create', [
      'title' => 'Create data role',
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(RoleSr $request)
  {
    $datastore = $request->validated();

    Role::create($datastore);

    Alert::success(
      'success',
      'Data role! berhasil di tambahkan.'
    );

    return redirect()->route('roles.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Role $role)
  {
    return view('backend.manageuser.roles.show', [
      'title' => 'Detail data roles',
      'role' => $role
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Role $role)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(RoleUr $request, Role $role)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Role $role)
  {
    //
  }

  /**
   * Generate resource slug otomatis.
   */
  public function slug(Request $request)
  {
    $slug = SlugService::createSlug(
      Role::class,
      'slug',
      $request->name
    );

    return response()->json(['slug' => $slug]);
  }
}
