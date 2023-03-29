<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ env('APP_NAME') }} - @yield('title')</title>

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>

<body>
  <main>
      {{-- <img class="my-1" src="{{ Vite::asset('resources/img/logo.png') }}" alt="">
       --}}
    
    <h1>@yield('title')</h1>

    @dump($movies)

  </main>
</body>

</html>
