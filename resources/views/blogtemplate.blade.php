<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title')</title>
	<meta charset="utf-8">
	<link rel="icon" href="{{asset('images/iconweb.png')}}" type="image/x-icon">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/carga.css')}}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="loader-wrapper">
      <div class="loader"></div>
    </div>
<header>
<div class="pos-f-t">
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="{{url('/')}}">
      <img src="{{asset('images/logo.png')}}" width="30" height="30" class="d-inline-block align-top" alt="Logo">
      Revista Ecologica
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarToggleExternalContent">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	  <li class="nav-item active">
          <p class="nav-link">MENÚ</p>
        </li>
	  <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('blogs')}}">Publicaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('thanks')}}">Agradecimientos</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
@yield('header-content')
</header>
<main>
	<div class="container">
		@yield('content')
	</div>
</main>
<footer>
    <div class="container">
        <p>Derechos de autor © 2023 Equipo 2</p>
    </div>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
      window.addEventListener("load", function () {
        const loader = document.querySelector(".loader-wrapper");
        loader.className += " hidden";
      });
    </script>
</html>