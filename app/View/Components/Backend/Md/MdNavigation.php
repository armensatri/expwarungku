<?php

namespace App\View\Components\Backend\Md;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MdNavigation extends Component
{
  public $route;
  public $active;
  public $menuName;

  public function __construct(
    $route,
    $active,
    $menuName,
  ) {
    $this->route = $route;
    $this->active = $active;
    $this->menuName = $menuName;
  }

  public function render(): View|Closure|string
  {
    return view('components.backend.md.md-navigation');
  }
}
