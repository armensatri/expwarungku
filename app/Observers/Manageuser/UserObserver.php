<?php

namespace App\Observers\Manageuser;

use App\Models\Manageuser\User;
use Illuminate\Support\Facades\Cache;

class UserObserver
{
  public function saved(User $user)
  {
    $this->invalidateCache();
  }

  public function deleted(User $user)
  {
    $this->invalidateCache();
  }

  private function invalidateCache()
  {
    Cache::put(
      'users_cache_version',
      Cache::get('users_cache_version', 1) + 1
    );
  }
}
