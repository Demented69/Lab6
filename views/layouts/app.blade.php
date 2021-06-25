<html>
  <head>
    <title>@yield('title')</title>
      <link rel="stylesheet" href="resources/css/forLending.css">
      <link rel="stylesheet" href="bootstrap-grid.css">
</head>
<body>
    @include('inc.header')

    @yield('content')

    @include('inc.footer')
</body>
</html>
