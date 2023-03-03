@extends('blogtemplate')

@section('title')
    Acerca de
@endsection

@section('content')
    <div class="container">
        <br>
        <br>
        <br>
        <center>
        <img src="{{ asset('images/logo.png') }}" alt="Imagen del post" width="160px" height="160px">
        <br>
        <h1>Acerca de</h1>
    </center>
         
    
        <br>
        <p class="tabout">¡Bienvenidos a nuestra página web de ecología! Somos el grupo 4A Logística y hemos creado este sitio para compartir información importante sobre el medio ambiente y cómo podemos cuidarlo.

Aquí encontrarás artículos y noticias sobre los últimos avances en la investigación y tecnología en ecología, así como consejos, articulos sobre vida silvestre, ecosistemas y recomendaciones prácticas para reducir tu impacto ambiental en tu día a día.

También compartiremos información sobre organizaciones y proyectos dedicados a la protección del medio ambiente, así como formas en las que puedes participar y contribuir a su labor.

Esperamos que encuentres nuestra página útil e informativa, y que juntos podamos hacer nuestra parte para preservar nuestro planeta para las generaciones futuras.

¡Gracias por visitarnos!</p>
    </div>
    <center>
        <h2><a href="{{url('/')}}">Regresar al inicio</a></h2>
    </center>
@endsection