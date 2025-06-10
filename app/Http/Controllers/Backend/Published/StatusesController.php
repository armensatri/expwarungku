<?php

namespace App\Http\Controllers\Backend\Published;

use Illuminate\Http\Request;
use App\Models\Published\Status;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Published\Status\StatusSr;
use App\Http\Requests\Published\Status\StatusUr;
use Cviebrock\EloquentSluggable\Services\SlugService;

class StatusesController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $statuses = Status::query()
      ->search(request(['search']))
      ->select(['id', 'ss', 'name', 'bg', 'text', 'description', 'url'])
      ->orderBy('ss', 'asc')
      ->paginate(15)
      ->withQueryString();

    return view('backend.published.statuses.index', [
      'title' => 'Semua data statuses',
      'statuses' => $statuses
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.published.statuses.create', [
      'title' => 'Create data status'
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StatusSr $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(Status $status)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Status $status)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(StatusUr $request, Status $status)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Status $status)
  {
    //
  }

  /**
   * Generate resource slug otomatis.
   */
  public function slug(Request $request)
  {
    $slug = SlugService::createSlug(
      Status::class,
      'slug',
      $request->name
    );

    return response()->json(['slug' => $slug]);
  }
}
