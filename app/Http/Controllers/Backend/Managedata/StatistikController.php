<?php

namespace App\Http\Controllers\Backend\Managedata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatistikController extends Controller
{
  public function index()
  {
    return view('backend.managedata.statistik.index', [
      'title' => 'Statistik'
    ]);
  }
}
