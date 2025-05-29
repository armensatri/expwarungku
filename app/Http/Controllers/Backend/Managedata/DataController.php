<?php

namespace App\Http\Controllers\Backend\Managedata;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
  public function index()
  {
    return view('backend.managedata.data.index', [
      'title' => 'Monitoring data system'
    ]);
  }
}
