
<!doctype html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @vite('resources/css/app.css')

</head>

<body>

@include('include.header')

@yield('content')

@include('include.footer')
</body>
</html>
