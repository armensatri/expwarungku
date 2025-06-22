<?php

namespace App\Http\Requests\Managemenu\Submenu;

use Illuminate\Foundation\Http\FormRequest;

class SubmenuUr extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'menu_id' => [
        'required'
      ],

      'ssm' => [
        'required',
        'numeric'
      ],

      'name' => [
        'required',
        'min:4',
        'max:50',
      ],

      'slug' => [
        'required',
        'min:4',
        'max:50',
      ],
    ];
  }

  public function messages()
  {
    return [
      'menu_id.required' => 'Submenu..menu_id! harus di isi',

      'ssm.required' => 'Submenu..ssm! harus di isi',
      'ssm.numeric' => 'Submenu..ssm! harus angka',

      'name.required' => 'Submenu..name! harus di isi',
      'name.min' => 'Submenu..name! minimal 4 karakter',
      'name.max' => 'Submenu..name! maksimal 50 karakter',

      'slug.required' => 'Submenu..slug! harus di isi',
      'slug.min' => 'Submenu..slug! minimal 4 karakter',
      'slug.max' => 'Submenu..slug! maksimal 50 karakter',
    ];
  }
}
