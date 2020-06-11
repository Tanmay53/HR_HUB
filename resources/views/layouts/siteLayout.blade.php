<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config("app.name", "HR_HUB")}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

      <!-- Navigation Bar -->

      <nav class="navbar navbar-expand-md navbar-dark px-5 py-3">
        <a class="navbar-brand" href="/">{{config('app.name', "HR_HUB")}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item @if($tab == 'opportunities') active @endif">
              <a class="nav-link text-light" href="/opportunities">Opportunities<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @if($tab == 'opportunities') active @endif">
              <a class="nav-link text-light" href="/join">Join Us</a>
            </li>
            <li class="nav-item @if($tab == 'opportunities') active @endif">
              <a href="/login" class="nav-link text-light">Log In</a>
            </li>
            <li class="nav-item @if($tab == 'opportunities') active @endif">
              <a href="/contact" class="nav-link text-light">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
      
      <!-- Site Contents -->
      @yield('content')

      <!-- Scripts -->

      <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>