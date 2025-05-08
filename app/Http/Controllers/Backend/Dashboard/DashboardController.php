<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Helpers\Access;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function __construct()
  {
    Access::toDashboard();
  }

  public function index()
  {
    $user = Auth::user();

    $views = [
      'superadmin' => 'backend.dashboard.superadmin',
      'admin'      => 'backend.dashboard.admin',
      'owner'      => 'backend.dashboard.owner',
      'member'     => 'backend.dashboard.member',
    ];

    if (!array_key_exists($user->role, $views)) {
      abort(403, 'Unauthorized role.');
    }

    return view($views[$user->role], [
      'title' => 'Dashboard ' . $user->role,
      'user' => $user
    ]);
  }
}
