@extends('blogtemplate')

@section('title')
    PUBLICACIONES
@endsection


@section('content')
<br><br><br>
    <div class="container">
        <h1>TODOS NUESTROS ARTICULOS</h1>

        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    
                    <a href="{{ route('post', $post->slug)}}" class="card-title"><h5>{{ $post->title }}</h5></a>
                    <p class="card-text">{{ Str::limit($post->body, 150) }}</p>
                    <p class="card-text">Por: {{ $post->user->name }}</p>
                    <p class="card-text"><small class="text-muted">Última actualización: {{ $post->updated_at->format('d/m/Y H:i') }}</small></p>
                </div>
            </div>
        @endforeach
            
           <!-- {{ $posts->links() }}-->
            {{ $posts->links('pagination::default')->with('prevClass', 'invisible')->with('nextClass', 'invisible') }}
    </div>
@endsection
