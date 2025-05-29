<?php

namespace App\Http\Controllers\Backend\Blocked;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlockedController extends Controller
{
  public function blocked()
  {
    return view('backend.blocked.blocked', [
      'title' => 'Blocked'
    ]);
  }

  public function blockedPermission()
  {
    return view('backend.blocked.blocked-permission', [
      'title' => 'Blocked permission'
    ]);
  }
}
