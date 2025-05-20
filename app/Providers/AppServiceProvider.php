<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Manageuser\{
  Role,
  User,
  Permission,
};

use App\Observers\Manageuser\{
  UserObserver,
  RoleObserver,
  PermissionObserver,
};

class AppServiceProvider extends ServiceProvider
{
  public function register(): void
  {
    //
  }

  public function boot(): void
  {
    User::observe(UserObserver::class);
    Role::observe(RoleObserver::class);
    Permission::observe(PermissionObserver::class);
  }
}
