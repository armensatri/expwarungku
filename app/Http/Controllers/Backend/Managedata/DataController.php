<?php

namespace App\Http\Controllers\Backend\Managedata;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Manageuser\{
  User,
  Role,
  Permission,
};

use App\Models\Managemenu\{
  Menu,
  Submenu,
};

class DataController extends Controller
{
  public function index()
  {
    return view('backend.managedata.data.index', [
      'title' => 'Monitoring data system'
    ]);
  }

  public function count()
  {
    return view('backend.managedata.data.count', [
      'title' => 'Monitoring data count',
      'users' => User::count(),
      'roles' => Role::count(),
      'permissions' => Permission::count(),
      'menus' => Menu::count(),
      'submenus' => Submenu::count()
    ]);
  }

  public function statistic()
  {
    return view('backend.managedata.data.statistic', [
      'title' => 'Monitoring data statistic',
    ]);
  }

  public function visitor()
  {
    return view('backend.managedata.data.visitor', [
      'title' => 'Monitoring data visitor'
    ]);
  }
}
