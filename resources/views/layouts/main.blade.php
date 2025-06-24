<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
    @yield('css')
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark mi-barra">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Blogy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">{{ __("sitio.nav_inicio") }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">{{ __("sitio.nav_etiquetas") }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">{{ __("sitio.nav_articulos") }}</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="{{ __("sitio.nav_texto_busqueda") }}" aria-label="Search"/>
            <button class="btn btn-warning" type="submit">{{ __("sitio.nav_boton_busqueda") }}</button>
          </form>
        </div>
      </div>
    </nav>
    @yield('contenido')

    @yield('js')
</body>
</html>