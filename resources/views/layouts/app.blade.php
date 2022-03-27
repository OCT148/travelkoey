<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
    </style>

  </head>
  <body>
      @include('inc.header')
      <div class="container">
        @yield('content')
      </div>
  </body>
</html>