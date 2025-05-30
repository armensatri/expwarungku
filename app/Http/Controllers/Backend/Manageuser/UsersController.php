<?php

namespace App\Http\Controllers\Backend\Manageuser;

use App\Helpers\RandomUrl;
use Illuminate\Http\Request;
use App\Models\Manageuser\Role;
use App\Models\Manageuser\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Manageuser\User\UserSr;
use App\Http\Requests\Manageuser\User\UserUr;

class UsersController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $users = User::query()
      ->search(request(['search', 'role']))
      ->select(['id', 'image', 'name', 'email', 'role_id', 'url'])
      ->with(['role:id,name,bg,text'])
      ->orderBy('id', 'asc')
      ->paginate(15)
      ->withQueryString();

    return view('backend.manageuser.users.index', [
      'title' => 'Semua data user',
      'users' => $users
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(User $user)
  {
    $roles = Role::select('id', 'name')
      ->orderBy('sr', 'asc')
      ->get();

    return view('backend.manageuser.users.create', [
      'title' => 'Create data user',
      'user' => $user,
      'roles' => $roles
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(UserSr $request)
  {
    $datastore = $request->validated();

    $datastore['url'] = $request->input('url')
      ?: RandomUrl::GenerateUrl();

    if ($request->hasFile('image')) {
      $datastore['image'] = $request->file('image')->store(
        '/manageuser/users'
      );
    }

    $datastore['role_id'] = $request->role_id;

    User::create($datastore);

    Alert::success(
      'success',
      'Data user! berhasil di tambahkan.'
    );

    return redirect()->route('users.index');
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
    $roles = Role::select('id', 'name')
      ->orderBy('sr', 'asc')
      ->get();

    return view('backend.manageuser.users.edit', [
      'title' => 'Edit data user',
      'user' => $user,
      'roles' => $roles
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UserUr $request, User $user)
  {
    $dataupdate = $request->validated();

    if (
      $request->username != $user->username ||
      $request->email != $user->email
    ) {
      $rules = [
        'username' => 'unique:users,username,' . $user->id,
        'email' => 'unique:users,email,' . $user->id,
      ];

      $messages = [
        'username.unique' => 'User..username! sudah terdaptar',
        'email.unique' => 'User..email! sudah terdaptar',
      ];

      $request->validate($rules, $messages);
    }

    if ($request->hasFile('image')) {
      if (!empty($user->image)) {
        Storage::delete($user->image);
      }

      $dataupdate['image'] = $request->file('image')->store(
        '/manageuser/users'
      );
    }

    $dataupdate['role_id'] = $request->role_id;

    $user->update($dataupdate);

    Alert::success(
      'success',
      'Data user! berhasil di update.'
    );

    return redirect()->route('users.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(User $user)
  {
    if (in_array($user->username, ['armensatri'])) {
      Alert::warning(
        'Oops...',
        'Data user! tidak bisa di delete.'
      );

      return redirect()->route('users.index');
    }

    if ($user->image) {
      Storage::delete($user->image);
    }

    User::destroy($user->id);

    Alert::success(
      'success',
      'Data user! berhasil di delete.'
    );

    return redirect()->route('users.index');
  }
}
