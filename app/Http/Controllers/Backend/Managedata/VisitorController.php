<?php

namespace App\Http\Controllers\Backend\Managedata;

use Illuminate\Http\Request;
use App\Models\Manageuser\User;
use App\Http\Controllers\Controller;

class VisitorController extends Controller
{
  public function index()
  {
    $users = User::query()
      ->select(['id', 'name', 'role_id', 'status', 'last_seen', 'url'])
      ->with(['role:id,name,bg,text'])
      ->orderBy('id', 'asc')
      ->paginate(15)
      ->withQueryString();

    return view('backend.managedata.visitor.index', [
      'title' => 'Visitor',
      'users' => $users
    ]);
  }

  public function online()
  {
    $users = User::query()
      ->select(['id', 'name', 'role_id', 'status', 'last_seen', 'url'])
      ->with(['role:id,name,bg,text'])
      ->where('status', 1)
      ->orderBy('id', 'asc')
      ->paginate(15)
      ->withQueryString();

    return view('backend.managedata.visitor.online', [
      'title' => 'Visitor online',
      'users' => $users
    ]);
  }

  public function offline()
  {
    $users = User::query()
      ->select(['id', 'name', 'role_id', 'status', 'last_seen', 'url'])
      ->with(['role:id,name,bg,text'])
      ->where('status', 0)
      ->orderBy('id', 'asc')
      ->paginate(15)
      ->withQueryString();

    return view('backend.managedata.visitor.offline', [
      'title' => 'Visitor offline',
      'users' => $users
    ]);
  }
}
