@extends('blogtemplate')

@section('title')
    {{$post->title}}
@endsection

@section('content')
    <center>
        <br><br><br>
    <h1>{{$post->title}}</h1>
    <br>
    <span>Escrito por: {{$post->user->name}}</span>
    <br>
    <span>Creado en: {{$post->created_at}}</span>
    <br>
    <span>Actualizado en: {{$post->updated_at}}</span>
    <p style="text-align: justify">
        {{$post->body}}
    </p>
    <br>
    <!-- Imagenes -->
    @if(!empty($post->postImages) && count($post->postImages) > 0)
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    @foreach ($post->postImages as $index => $image)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
    @endforeach
  </ol>
  <div class="carousel-inner">
    @foreach ($post->postImages as $index => $image)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
          <img class="d-block w-100 carousel-img" src="{{ asset('storage/images/'.$image->path) }}" alt="">
        </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            @else
                <img src="{{ asset('images/img1.png') }}" alt="Artículo Reciente 1" height="120px" weight="120px">
            @endif

    <!-- Imagenes -->
    <br>
    <div>
        <p>Referencias: {{$post->references}}</p>
    </div>
    <br>
    <div>
        <a href="{{ route('blogs') }}" class="btn btn-primary">Regresar</a>
    </div>
    </center>
@endsection
