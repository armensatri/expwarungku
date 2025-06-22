<?php

namespace App\Models\Managemenu;

use App\Helpers\RandomUrl;
use App\Helpers\Searching;
use App\Models\Managemenu\Menu;
use App\Models\Manageuser\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Cviebrock\EloquentSluggable\Sluggable;

class Submenu extends Model
{
  use Sluggable;

  protected $table = 'submenus';

  protected $fillable = [
    'menu_id',
    'ssm',
    'name',
    'slug',
    'route',
    'active',
    'routename',
    'description',
    'url'
  ];

  public function getRouteKeyName()
  {
    return 'url';
  }

  public function sluggable(): array
  {
    return [
      'slug' => [
        'source' => 'name'
      ]
    ];
  }

  public function menu()
  {
    return $this->belongsTo(Menu::class);
  }

  public function roles()
  {
    return $this->belongsToMany(
      Role::class,
      'role_has_submenu',
      'submenu_id',
      'role_id',
    );
  }

  protected static function boot()
  {
    parent::boot();

    static::saving(function ($submenu) {
      if (empty($submenu->url)) {
        do {
          $url = RandomUrl::GenerateUrl();
        } while (Submenu::where('url', $url)->exists());

        $submenu->url = $url;
      }
    });
  }

  public function scopeSearch(Builder $query, array $filters): void
  {
    $fields = ['name'];

    $relations = [
      'menu' => 'name'
    ];

    $query->when(
      $filters['search'] ?? false,
      function ($query, $search) use ($fields, $relations) {
        Searching::applySearch($query, $search, $fields, $relations);
      }
    );
  }
}
