<?php

namespace App\Http\Controllers\Backend\Managedata;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataVerificationController extends Controller
{
  public function index()
  {
    return view('backend.managedata.verification.index', [
      'title' => 'User verification'
    ]);
  }
}
