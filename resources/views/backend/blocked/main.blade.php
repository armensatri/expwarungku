<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>

    <!-- VITE TAILWIND CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- DEFAULT FONT INTER -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  </head>

  <body class="flex items-center justify-center h-screen bg-sky-100">
    <section>
      <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
        @yield('blocked')
      </div>
    </section>
  </body>
</html>
