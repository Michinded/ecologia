@extends('blogtemplate')

@section('title')
    PUBLICACIONES
@endsection


@section('content')
<br><br><br>
    <div class="container">
        <h1>TODOS NUESTROS ARTICULOS</h1>
        
        @foreach($posts as $post)
        <section class="articles">
            <article>
            @if(!empty($post->postImages) && count($post->postImages) > 0)
            <?php $randomIndex = rand(0, count($post->postImages) - 1); ?>
            <img src="{{ asset('storage/images/'.$post->postImages[$randomIndex]->path) }}" alt="image" height="150px" weight="160px">
            @else
                <img src="{{ asset('images/img1.png') }}" alt="Artículo" height="150px" weight="160px">
            @endif
				<a href="{{ route('post', $post->slug)}}" class="card-title"><h5>{{ $post->title }}</h5></a>
				<p>{{Str::limit($post->body, 150)}}</p>
                <p class="card-text">Por: {{ $post->user->name }}</p>
				<a href="{{ route('post', $post->slug)}}">Leer más</a>
                <p class="card-text"><small class="text-muted">Última actualización: {{ $post->updated_at->format('d/m/Y H:i') }}</small></p>
			</article>
        </section>
        @endforeach
        
           <!-- {{ $posts->links() }}-->
            {{ $posts->links('pagination::default')->with('prevClass', 'invisible')->with('nextClass', 'invisible') }}
    </div>
@endsection
