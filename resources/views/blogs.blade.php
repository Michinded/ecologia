@extends('blogtemplate')

@section('title')
    PUBLICACIONES
@endsection


@section('content')
<br><br><br>
    <div class="container">
        <h1>TODOS NUESTROS ARTICULOS</h1>
        <section class="articles">
        @foreach($posts as $post)
        
            <article>
            @if(!empty($post->postImages) && count($post->postImages) > 0)
            <?php $randomIndex = rand(0, count($post->postImages) - 1); ?>
            <img src="{{ asset('storage/images/'.$post->postImages[$randomIndex]->path) }}" alt="">
            @else
                <img src="{{ asset('images/img1.png') }}" alt="Artículo Reciente 1">
            @endif
				<a href="{{ route('post', $post->slug)}}" class="card-title"><h5>{{ $post->title }}</h5></a>
				<p>{{Str::limit($post->body, 150)}}</p>
                <p class="card-text">Por: {{ $post->user->name }}</p>
				<a href="{{ route('post', $post->slug)}}">Leer más</a>
                <p class="card-text"><small class="text-muted">Última actualización: {{ $post->updated_at->format('d/m/Y H:i') }}</small></p>
			</article>
       
        @endforeach
        </section>
           <!-- {{ $posts->links() }}-->
            {{ $posts->links('pagination::default')->with('prevClass', 'invisible')->with('nextClass', 'invisible') }}
    </div>
@endsection
