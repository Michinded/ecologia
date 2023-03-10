@extends('layouts.app')
@section('MiPagina')
    {{ __('Pagina Principal') }}
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panel de opciones') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido!') }}

                    {{ __(' Has iniciado sesión como:') }}
                    {{Auth::user()->name}}
                    <ul class="navbar-nav ms-auto" aria-labelledby="navbarDropdown">
                    <br>        
                            <li class="nav-item"><a href="{{ url('/') }}">Pagina de la revista</a></li>
                            <br>
                            <li class="nav-item"><a href="{{ route('blogs') }}">Blogs de la revista</a></li>
                            <br>
                            <li class="nav-item"><a href="#">Crear nueva publicación</a></li>
                            <br>
                            <li class="nav-item"><a href="#">Editar publicaciones</a></li>
                            <br>
                            <li class="nav-item"><a href="#">Eliminar publicaciones</a></li>
                        </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
