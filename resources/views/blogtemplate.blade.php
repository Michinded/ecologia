<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title')</title>
	<meta charset="utf-8">
	<link rel="icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/carga.css')}}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Prueba de CSS manual -->
  <style>
    /* Estilos para el encabezado */
/*header {
	background-color: #b9b3b3;
	padding: 20px;
	box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
}*/

.logo img {
	max-height: 50px;
}

nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

nav ul li {
	margin: 0 10px;
}

nav ul li a {
	color: #000;
	text-decoration: none;
	font-weight: bold;
}

nav ul li a:hover {
	color: #666;
}

/* Estilos para el artículo destacado */
.featured {
	background-color: #f7f7f7;
	padding: 50px;
	text-align: center;
}

.featured h1 {
	margin-bottom: 20px;
}

.featured img {
	max-width: 100%;
	margin-bottom: 20px;
	box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
}

.featured h2 {
	margin: 0;
	font-size: 24px;
	margin-bottom: 10px;
}

.featured p {
	line-height: 1.5;
	margin-bottom: 20px;
}

.featured a {
	display: inline-block;
	padding: 10px 20px;
	background-color: #000;
	color: #fff;
	text-decoration: none;
	border-radius: 5px;
}

.featured a:hover {
	background-color: #666;
}

/* Estilos para la lista de artículos recientes */
.articles {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
	grid-gap: 30px;
	padding: 50px;
}

.articles h1 {
	margin-bottom: 20px;
}

.articles article {
	background-color: #fff;
	padding: 20px;
	box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
}

.articles img {
	max-width: 100%;
	margin-bottom: 20px;
	box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
}

.articles h2 {
	margin: 0;
	font-size: 18px;
	margin-bottom: 10px;
}

.articles p {
	line-height: 1.5;
	margin-bottom: 20px;
}

.articles a {
	display: inline-block;
	padding: 10px 20px;
	background-color: #000;
	color: #fff;
	text-decoration: none;
	border-radius: 5px;
}

.articles a:hover {
	background-color: #666;
}

.tabout {
	font-family: 'Roboto', sans-serif;
	text-align: justify;
  }

/*Estilos para la paginacion*/
.invisible {
	visibility: hidden;
  }

  .pagination li a {
	background-color: #007bff;
	color: #fff;
  }

  .pagination .active a {
	background-color: #fff;
	color: #007bff;
  }

  .pagination li a {
	font-size: 16px;
	padding: 8px 12px;
	margin-right: 4px;
  }

  .pagination li a {
	border: 1px solid #007bff;
	border-radius: 4px;
  }

  .pagination li a:hover {
	background-color: #0056b3;
	color: #fff;
  }

  .magazine-style {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

.magazine-image {
    width: 100%;
    height: auto;
    max-width: 400px;
    max-height: 300px;
    object-fit: cover;
    margin: 10px;
}

.carousel-img {
	max-width: 500px;
	height: 300px;
  }
  

/* Estilos para el pie de página */
footer {
	background-color: #f7f7f7;
	padding: 20px;
	text-align: center;
	margin-top: 50px;
}
  </style>
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
      Disociando
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
        <p>Derechos de autor © 2023 Disociando - LOS PAMBAZOS</p>
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