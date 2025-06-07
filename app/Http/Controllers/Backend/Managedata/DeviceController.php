<?php

namespace App\Http\Controllers\Backend\Managedata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
  public function index()
  {
    return view('backend.managedata.device.index', [
      'title' => 'Device'
    ]);
  }
}
