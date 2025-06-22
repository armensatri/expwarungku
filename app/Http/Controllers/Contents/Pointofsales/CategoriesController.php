<?php

namespace App\Http\Controllers\Contents\Pointofsales;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pointofsales\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Http\Requests\Pointofsales\Category\CategorySr;
use App\Http\Requests\Pointofsales\Category\CategoryUr;

class CategoriesController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $categories = Category::query()
      ->search(request(['search']))
      ->select(['']);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(CategorySr $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(Category $category)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Category $category)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(CategoryUr $request, Category $category)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Category $category)
  {
    //
  }

  /**
   * Generate resource slug otomatis.
   */
  public function slug(Request $request)
  {
    $slug = SlugService::createSlug(
      Category::class,
      'slug',
      $request->name
    );

    return response()->json(['slug' => $slug]);
  }
}
