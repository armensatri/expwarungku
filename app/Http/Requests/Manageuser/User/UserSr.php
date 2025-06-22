<?php

namespace App\Http\Requests\Manageuser\User;

use Illuminate\Foundation\Http\FormRequest;

class UserSr extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'name' => [
        'required',
        'min:4',
        'max:25',
        'regex:/^[a-zA-Z\s]+$/'
      ],

      'username' => [
        'required',
        'min:4',
        'max:14',
        'regex:/^[a-z]+$/',
        'unique:users,username'
      ],

      'email' => [
        'required',
        'email:rfc,dns',
        'unique:users,email',
      ],

      'password' => [
        'required',
        'min:8',
        'max:64',
        'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).+$/',
        'same:passkon'
      ],

      'passkon' => [
        'required',
        'same:password'
      ],

      'image' => [
        'image',
        'max:2048',
        'mimes:png,jpg,jpeg,webp'
      ],

      'role_id' => [
        'required'
      ],
    ];
  }

  public function messages()
  {
    return [
      'name.required' => 'Nama! harus di isi',
      'name.min' => 'Nama! minimal 5 karakter',
      'name.max' => 'Nama! maksimal 25 karakter',
      'name.regex' => 'Nama! harus menggunakan huruf kecil dan besar',

      'username.required' => 'Username! harus di isi',
      'username.min' => 'Username! minimal 4 karakter',
      'username.max' => 'Username! maksimal 14 karakter',
      'username.regex' =>
      'Username! harus menggunakan huruf kecil tanpa spasi',
      'username.unique' => 'Username! sudah terdaftar',

      'email.required' => 'Email! harus di isi',
      'email.email' => 'Email! tidak valid',
      'email.unique' => 'Email! sudah terdaftar',

      'password.required' => 'Password! harus di isi',
      'password.min' => 'Password! minimal 8 karakter',
      'password.max' => 'Password! maksimal 64 karakter',
      'password.regex' =>
      'harus ada huruf besar, huruf kecil, angka, dan karakter khusus',
      'password.same' => 'Password! harus sama dengan password konfirm',

      'passkon.required' => 'password konfirm! harus di isi',
      'passkon.same' => 'password konfirm! harus sama dengan password',

      'image.image' => 'User..image! file yang di upload bukan image',
      'image.max' => 'User..image! ukuran image maksimal 2 mb',
      'image.mimes' => 'User..image! type harus png, jpg, jpeg, webp',

      'role_id.required' => 'User..role! harus di isi',
    ];
  }
}
