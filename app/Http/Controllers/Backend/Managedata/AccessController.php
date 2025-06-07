<?php

namespace App\Http\Controllers\Backend\Managedata;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccessController extends Controller
{
  public function index()
  {
    return view('backend.managedata.access.index', [
      'title' => 'Access'
    ]);
  }
}
