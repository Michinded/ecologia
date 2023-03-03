@extends('blogtemplate')

@section('title')
    {{$post->title}}
@endsection

@section('content')
    <center>
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
    <p>
        <img src="{{ asset('storage/' . $post->image) }}" alt="Imagen del post" width="500px" height="500px">
    </p>
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
