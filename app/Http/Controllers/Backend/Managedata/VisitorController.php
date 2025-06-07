<?php

namespace App\Http\Controllers\Backend\Managedata;

use App\Http\Controllers\Controller;
use App\Models\Manageuser\User;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
  public function index()
  {
    $users = User::query()
      ->select(['id', 'name', 'role_id', 'status', 'url'])
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
      ->select(['id', 'name', 'role_id', 'status', 'url'])
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
      ->select(['id', 'name', 'role_id', 'status', 'url'])
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
