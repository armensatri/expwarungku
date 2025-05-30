<?php

namespace App\Models\Managemenu;

use App\Helpers\RandomUrl;
use App\Models\Manageuser\Role;
use App\Models\Managemenu\Submenu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Cviebrock\EloquentSluggable\Sluggable;

class Menu extends Model
{
  use Sluggable;

  protected $table = 'menus';

  protected $fillable = [
    'sm',
    'name',
    'slug',
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

  public function submenus()
  {
    return $this->hasMany(Submenu::class);
  }

  public function roles()
  {
    return $this->belongsToMany(
      Role::class,
      'role_has_menu',
      'menu_id',
      'role_id'
    );
  }

  protected static function boot()
  {
    parent::boot();

    static::saving(function ($menu) {
      if (empty($menu->url)) {
        do {
          $url = RandomUrl::GenerateUrl();
        } while (Menu::where('url', $url)->exists());

        $menu->url = $url;
      }
    });
  }

  public function scopeSearch(Builder $query, array $filters): void
  {
    $fields = ['name'];

    $query->when(
      $filters['search'] ?? false,
      fn($query, $search) =>
      $query->where(function ($query) use ($search, $fields) {
        foreach ($fields as $field) {
          $query->orWhere($field, 'like', '%' . $search . '%');
        }
      })
    );
  }
}
