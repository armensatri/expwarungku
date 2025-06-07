<?php

namespace App\Http\Controllers\Backend\Managedata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogDataController extends Controller
{
  public function index()
  {
    return view('backend.managedata.logdata.index', [
      'title' => 'Log data'
    ]);
  }
}
