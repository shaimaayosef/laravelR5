<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Start Nav bar -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Clients</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('addClient') }}">Add</a></li>
        <li><a href="{{ route('clients') }}">Clients</a></li>
        <li><a href="{{ route('trashedClients') }}">TRUSHED</a></li>
        <li><a href="{{ LaravelLocalization::getLocalizedURL('en') }}">en</a></li>
        <li><a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">ar</a></li>
        <li><a href="{{ route('facebookRedirect') }}">login with facebook</a></li>
        @yield('menu')
        @stack('submenu')
      </ul>
    </div>
  </nav>
  <!-- End Nav bar -->
</body>
</html>