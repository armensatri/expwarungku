<?php

namespace App\Http\Controllers\Backend\Managemenu;

use App\Helpers\RandomUrl;
use Illuminate\Http\Request;
use App\Models\Managemenu\Menu;
use App\Models\Managemenu\Submenu;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Managemenu\Submenu\SubmenuSr;
use App\Http\Requests\Managemenu\Submenu\SubmenuUr;
use Cviebrock\EloquentSluggable\Services\SlugService;

class SubmenusController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $submenus = Submenu::query()
      ->search(['search', 'menu'])
      ->select(['id', 'menu_id', 'ssm', 'name', 'description', 'url'])
      ->with(['menu'])
      ->orderBy('menu_id', 'asc')
      ->paginate(15)
      ->withQueryString();

    return view('backend.managemenu.submenus.index', [
      'title' => 'Semua data submenus',
      'submenus' => $submenus
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $menus = Menu::select('id', 'name')
      ->orderBy('sm', 'asc')
      ->get();

    return view('backend.managemenu.submenus.create', [
      'title' => 'Create data menu',
      'menus' => $menus
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(SubmenuSr $request)
  {
    $datastore = $request->validated();

    $datastore['url'] = $request->input('url')
      ?: RandomUrl::GenerateUrl();

    Submenu::create($datastore);

    Alert::success(
      'success',
      'Data submenu! berhasil di tambahkan.'
    );

    return redirect()->route('submenus.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Submenu $submenu)
  {
    return view('backend.managemenu.submenus.show', [
      'title' => 'Detail data submenu',
      'submenu' => $submenu
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Submenu $submenu)
  {
    $menus = Menu::select('id', 'name')
      ->orderBy('sm', 'asc')
      ->get();

    return view('backend.managemenu.submenus.edit', [
      'title' => 'Edit data submenu',
      'submenu' => $submenu,
      'menus' => $menus
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(SubmenuUr $request, Submenu $submenu)
  {
    $dataupdate = $request->validated();

    if (
      $request->name != $submenu->name ||
      $request->slug != $submenu->slug
    ) {
      $rules = [
        'name' => 'unique:submenus,name,' . $submenu->id,
        'slug' => 'unique:submenus,slug,' . $submenu->id,
      ];

      $messages = [
        'name.unique' => 'Submenu..name! sudah terdaptar',
        'slug.unique' => 'Submenu..slug! sudah terdaptar',
      ];

      $request->validate($rules, $messages);
    }

    $submenu->update($dataupdate);

    Alert::success(
      'success',
      'Data submenu! berhasil di update.'
    );

    return redirect()->route('submenus.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Submenu $submenu)
  {
    if (in_array($submenu->name, ['menus', 'submenus'])) {
      Alert::warning(
        'Oops...',
        'Data submenu! tidak bisa di delete.'
      );

      return redirect()->route('submenus.index');
    }

    Submenu::destroy($submenu->id);

    Alert::success(
      'success',
      'Data submenu! berhasil di delete.'
    );

    return redirect()->route('submenus.index');
  }

  /**
   * Generate resource slug otomatis.
   */
  public function slug(Request $request)
  {
    $slug = SlugService::createSlug(
      Submenu::class,
      'slug',
      $request->name
    );

    return response()->json(['slug' => $slug]);
  }
}
