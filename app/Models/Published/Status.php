<?php

namespace App\Models\Published;

use App\Helpers\RandomUrl;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Cviebrock\EloquentSluggable\Sluggable;

class Status extends Model
{
  use Sluggable;

  protected $table = 'statuses';

  protected $fillable = [
    'ss',
    'name',
    'slug',
    'bg',
    'text',
    'description',
    'url',
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

  protected static function boot()
  {
    parent::boot();

    static::saving(function ($status) {
      if (empty($status->url)) {
        do {
          $url = RandomUrl::GenerateUrl();
        } while (Status::where('url', $url)->exists());

        $status->url = $url;
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
