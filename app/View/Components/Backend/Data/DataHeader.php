<?php

namespace App\View\Components\Backend\Data;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DataHeader extends Component
{
  public $image;
  public $alt;
  public $title;
  public $description;

  public function __construct(
    $image,
    $alt,
    $title,
    $description
  ) {
    $this->image = $image;
    $this->alt = $alt;
    $this->title = $title;
    $this->description = $description;
  }

  public function render(): View|Closure|string
  {
    return view('components.backend.data.data-header');
  }
}
