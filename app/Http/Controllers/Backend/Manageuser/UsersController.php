<?php

namespace App\Http\Controllers\Backend\Manageuser;

use Illuminate\Http\Request;
use App\Models\Manageuser\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\Manageuser\User\UserSr;
use App\Http\Requests\Manageuser\User\UserUr;

use function Ramsey\Uuid\v1;

class UsersController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $search = request('search');
    $role = request('role');
    $page = request('page', 1);
    $cacheVersion = Cache::get('users_cache_version', 1);

    $cachekey =
      "users_v{$cacheVersion}:search:{$search}:role:{$role}:page:{$page}";

    $users = Cache::remember(
      $cachekey,
      now()->addMinutes(5),
      function () {
        return User::search(request(['search', 'role']))
          ->select(['id', 'name', 'username', 'email', 'image', 'role_id'])
          ->with(['role'])
          ->orderBy('id', 'asc')
          ->paginate(10)
          ->withQueryString();
      }
    );

    return view('backend.manageuser.users.index', [
      'title' => 'Semua data users',
      'users' => $users
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(User $user)
  {
    return view('backend.manageuser.users.create', [
      'title' => 'Create data user',
      'users' => $user
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(UserSr $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(User $user)
  {
    return view('backend.manageuser.users.show', [
      'title' => 'Detail data user',
      'user' => $user
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(User $user)
  {
    return view('backend.manageuser.users.edit', [
      'title' => 'Edit data user',
      'user' => $user
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UserUr $request, User $user)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(User $user)
  {
    //
  }
}
