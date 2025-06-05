<?php

namespace App\Http\Controllers\Backend\Managedata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
  public function index()
  {
    return view('backend.managedata.visitor.index', [
      'title' => 'Managedata visitor'
    ]);
  }
}
