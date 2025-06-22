<?php

namespace App\View\Components\Backend\Md;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MdHeader extends Component
{
  public $img;
  public $alt;
  public $title;
  public $description;

  public function __construct(
    $img,
    $alt,
    $title,
    $description
  ) {
    $this->img = $img;
    $this->alt = $alt;
    $this->title = $title;
    $this->description = $description;
  }

  public function render(): View|Closure|string
  {
    return view('components.backend.md.md-header');
  }
}
