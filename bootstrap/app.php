<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
  ->withRouting(
    health: '/up',
    commands: __DIR__ . '/../routes/console.php',

    web: [
      __DIR__ . '/../routes/web.php',

      __DIR__ . '/../routes/auth/auth.php',

      __DIR__ . '/../routes/backend/account.php',
      __DIR__ . '/../routes/backend/blocked.php',
      __DIR__ . '/../routes/backend/dashboard.php',
      __DIR__ . '/../routes/backend/manageaccess.php',
      __DIR__ . '/../routes/backend/managedata.php',
      __DIR__ . '/../routes/backend/managemenu.php',
      __DIR__ . '/../routes/backend/manageuser.php',
      __DIR__ . '/../routes/backend/published.php',
      __DIR__ . '/../routes/backend/random.php',

      __DIR__ . '/../routes/contents/pointofsales.php',
      __DIR__ . '/../routes/contents/transaction.php',
      __DIR__ . '/../routes/contents/report.php',

      __DIR__ . '/../routes/frontend/home.php',
    ],
  )

  ->withMiddleware(function (Middleware $middleware) {
    $middleware->alias([
      'permission' =>
      \App\Http\Middleware\PermissionMiddleware::class,
      'submenu.access' => \App\http\Middleware\SubmenuAccessMiddleware::class,
    ]);
  })

  ->withExceptions(function (Exceptions $exceptions) {
    //
  })->create();
