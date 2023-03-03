@extends('blogtemplate')

@section('title')
    Inicio
@endsection

@section('titleNav')
    INICIO
@endsection

@section('header-content')
<BR></BR>
    <div class="container">
        <h1>Nuestra revista</h1>
        <p>Noticias de Ecologia, vida silvestre, animales, plantas, etc.</p>
    </div>
@endsection

@section('content')
<section class="featured">
			<h1>Artículo Destacado</h1>
			<article>
				<img src="{{ asset('images/destacado.png') }}" height="70px" width="70px" alt="Artículo Destacado">
    			<div>
        		<h2>{{ $post[0]->title }}</h2>
        		<p>{{ Str::limit($post[0]->body, 150) }}</p>
    			</div>
				<a href="{{ route('post', $post[0]->slug)}}">Leer más</a>
			</article>
		</section>
		<center><h1>Artículos Recientes</h1></center>
		<section class="articles">
			<article>
				<img src="{{ asset('images/img1.png') }}" alt="Artículo Reciente 1">
				<h2>{{$post[1]->title}}</h2>
				<p>{{Str::limit($post[1]->body, 150)}}</p>
				<a href="{{ route('post', $post[1]->slug)}}">Leer más</a>
			</article>
			<article>
				<img src="{{ asset('images/img2.png') }}" alt="Artículo Reciente 2">
				<h2>{{$post[2]->title}}</h2>
				<p>{{Str::limit($post[2]->body, 150)}}</p>
				<a href="{{ route('post', $post[2]->slug)}}">Leer más</a>
			</article>
			<article>
				<img src="{{ asset('images/img3.png') }}" alt="Artículo Reciente 3">
				<h2>{{$post[3]->title}}</h2>
				<p>{{Str::limit($post[3]->body, 150)}}</p>
				<a href="{{ route('post', $post[3]->slug)}}">Leer más</a>
			</article>
		</section>
@endsection
