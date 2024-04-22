<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Магазин за хранителни стоки</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

  <div class="container">

    <!-- Navigation Links -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Магазин за хранителни стоки</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Влез в профила си</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Регистрирай се</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" type="text/js"></script>

</body>

</html>
