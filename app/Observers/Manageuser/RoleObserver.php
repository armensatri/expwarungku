<?php

namespace App\Observers\Manageuser;

use App\Models\Manageuser\Role;
use Illuminate\Support\Facades\Cache;

class RoleObserver
{
  public function saved(Role $role)
  {
    $this->invalidateCache();
  }

  public function deleted(Role $role)
  {
    $this->invalidateCache();
  }

  private function invalidateCache()
  {
    Cache::put(
      'roles_cache_version',
      Cache::get('roles_cache_version', 1) + 1
    );
  }
}
