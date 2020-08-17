<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-expand-md sticky-top navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand font-weight-bold" href="#">PortalSoloRaya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        @include('layouts.navbar')
      </div>
    </nav>

    <main class="py-4">
      @yield('content')
    </main>

    <footer class="bg-light text-dark">
      <div class="container-fluid">
        <div class="px-3 py-5">
          <div class="col-12">
            <div class="pt-4 text-center">
              <h4 class="font-weight-bold">Follow Us!</h4>
              <ul class="nav nav-soc justify-content-center">
                <li class="nav-item">
                  <a class="nav-link" href="#">Facebook</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Instagram</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Twitter</a>
                </li>
              </ul>
              <p>&#9400; 2020 PortalSoloRaya</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>
