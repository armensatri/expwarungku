<?php

namespace App\Http\Requests\Auth\Register;

use Illuminate\Foundation\Http\FormRequest;

class RegisterSr extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules()
  {
    return [
      'name' => [
        'required',
        'min:4',
        'max:50',
        'regex:/^[a-zA-Z\s]+$/'
      ],

      'username' => [
        'required',
        'min:4',
        'max:15',
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
    ];
  }

  public function messages()
  {
    return [
      'name.required' => 'Nama!', // ini lagi ya
      'name.min' => 'Nama!',
      'name.max' => 'Nama!',
      'name.regex' => 'Nama!',

      'username.required' => 'Username!',
      'username.min' => 'Username!',
      'username.max' => 'Username!',
      'username.regex' => 'Username!',
      'username.unique' => 'Username!',

      'email.required' => 'Email!',
      'email.email' => 'Email!',
      'email.unique' => 'Email!',

      'password.required' => 'Password!',
      'password.min' => 'Password!',
      'password.max' => 'Password!',
      'password.regex' => 'Password!',
      'password.same' => 'Password!',

      'passkon.required' => 'password konfirm!',
      'passkon.same' => 'password konfirm!',
    ];
  }
}
