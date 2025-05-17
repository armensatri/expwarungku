<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Login\LoginSr;
use App\Models\Manageuser\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
  public function index()
  {
    return view('auth.login.index', [
      'title' => 'Exp | Login'
    ]);
  }

  public function store(LoginSr $request)
  {
    $datastore = $request->validated();

    $key = Str::lower($request->email) . '|' . $request->ip();

    if (RateLimiter::tooManyAttempts($key, 5)) {
      $seconds = RateLimiter::availableIn($key);

      Alert::error(
        'Terlalu banyak percobaan',
        "Silahkan coba lagi dalam $seconds detik"
      );

      return redirect()->route('login');
    }

    if (Auth::attempt($datastore)) {
      $request->session()->regenerate();

      RateLimiter::clear($key);

      $mapRoutes = [
        'owner' => 'owner',
        'superadmin' => 'superadmin',
        'admin' => 'admin',
        'member' => 'member'
      ];

      $role = Auth::user()->role->name ?? '';
      $route = $mapRoutes[$role] ?? '';

      if ($route) {
        return redirect()->route($route);
      } else {
        Alert::error(
          'error',
          'Anda! tidak memiliki akses'
        );

        return redirect()->route('login');
      }
    } else {
      RateLimiter::hit($key, 60);

      Alert::error(
        'error',
        'Login gagal! email atau password salah'
      );

      return redirect()->route('login');
    }
  }
}
