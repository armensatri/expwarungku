<?php

namespace App\Providers;

use App\Models\Manageuser\User;
use Illuminate\Support\ServiceProvider;
use App\Observers\Manageuser\UserObserver;

class AppServiceProvider extends ServiceProvider
{
  public function register(): void
  {
    //
  }

  public function boot(): void
  {
    User::observe(UserObserver::class);
  }
}
