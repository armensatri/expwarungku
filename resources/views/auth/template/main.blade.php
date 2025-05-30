<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>

    <!-- VITE TAILWIND CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- DEFAULT FONT INTER -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
  </head>

  <body class="bg-blue-500">
    <div class="flex items-center justify-center min-h-screen">
      <!-- CONTENT-AUTH -->
      @yield('content-auth')
    </div>
  </body>
</html>
