<?php

namespace App\Models\Manageuser;

use App\Helpers\RandomUrl;
use App\Helpers\Searching;
use App\Models\Manageuser\Role;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use HasFactory;

  protected $table = 'users';

  protected $fillable = [
    'name',
    'username',
    'email',
    'password',
    'image',
    'role_id',
    'status',
    'url'
  ];

  protected $hidden = [
    'password'
  ];

  protected function casts()
  {
    return [
      'password' => 'hashed'
    ];
  }

  public function getRouteKeyName()
  {
    return 'url';
  }

  public function role()
  {
    return $this->belongsTo(Role::class);
  }

  public function status()
  {
    $online = $this->status;
    $color = $online ? 'green' : 'red';

    return [
      'bg' => "bg-{$color}-200",
      'text' => "text-{$color}-800",
      'status' => $online ? 'online' : 'offline',
    ];
  }

  protected static function boot()
  {
    parent::boot();

    static::saving(function ($user) {
      if (empty($user->url)) {
        do {
          $url = RandomUrl::GenerateUrl();
        } while (User::where('url', $url)->exists());

        $user->url = $url;
      }
    });
  }

  public function scopeSearch(Builder $query, array $fillters): void
  {
    $fields = ['name'];

    $relations = [
      'role' => 'name'
    ];

    $query->when(
      $fillters['search'] ?? false,
      function ($query, $search) use ($fields, $relations) {
        Searching::applySearch($query, $search, $fields, $relations);
      }
    );
  }
}
