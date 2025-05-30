<?php

namespace App\View\Components\Backend\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputTextarea extends Component
{
  public $labelFor;
  public $labelName;
  public $id;
  public $name;
  public $valueOld;
  public $valueDefault;
  public $error;
  public $placeholder;

  public function __construct(
    $labelFor,
    $labelName,
    $id,
    $name,
    $valueOld,
    $valueDefault,
    $error,
    $placeholder,
  ) {
    $this->labelFor = $labelFor;
    $this->labelName = $labelName;
    $this->id = $id;
    $this->name = $name;
    $this->valueOld = $valueOld;
    $this->valueDefault = $valueDefault;
    $this->error = $error;
    $this->placeholder = $placeholder;
  }

  public function render(): View|Closure|string
  {
    return view('components.backend.input.input-textarea');
  }
}
