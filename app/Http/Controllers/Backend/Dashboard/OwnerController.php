<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Helpers\Access;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{
  public function __construct()
  {
    Access::toDashboard();
  }

  public function index()
  {
    $owner = Auth::user();

    return view('backend.dashboard.owner', [
      'title' => 'Dashboard owner',
      'owner' => $owner
    ]);
  }
}
