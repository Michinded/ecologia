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
        <h1>Disociando</h1>
        <p>Noticias de Ecologia, seres vivos, Ecosistemas y más</p>
    </div>
@endsection

@section('content')

<section class="featured">
			<h1>Disociando</h1>
			<article>
				<img src="{{ asset('images/banner.jpg') }}" alt="Banner">
			</article>
		</section>
	<br> <br>
	<section class="featured">
			<h1>Artículo Destacado</h1>
			<article>
				@if(!empty($post[0]->postImages) && count($post[0]->postImages) > 0)
            		<?php $randomIndex = rand(0, count($post[0]->postImages) - 1); ?>
            		<img src="{{ asset('storage/images/'.$post[0]->postImages[$randomIndex]->path) }}" alt="" height="70px" weight="70px">
            	@else
                	<img src="{{ asset('images/img1.png') }}" alt="Artículo Reciente 1" height="70px" weight="70px">
            	@endif
    			<div>
        		<h2>{{ $post[0]->title }}</h2>
        		<p>{{ Str::limit($post[0]->body, 150) }}</p>
    			</div>
				<a href="{{ route('post', $post[0]->slug)}}">Leer más</a>
			</article>
		</section>
		<center><h1>Algunos de nuestros mejores artículos</h1></center>
		<section class="articles">
			<article>
				@if(!empty($post[1]->postImages) && count($post[1]->postImages) > 0)
            		<?php $randomIndex = rand(0, count($post[1]->postImages) - 1); ?>
            		<img src="{{ asset('storage/images/'.$post[1]->postImages[$randomIndex]->path) }}" alt="" height="70px" weight="70px">
            	@else
                	<img src="{{ asset('images/img1.png') }}" alt="Artículo Reciente 1" height="70px" weight="70px">
            	@endif
				<h2>{{$post[1]->title}}</h2>
				<p>{{Str::limit($post[1]->body, 150)}}</p>
				<a href="{{ route('post', $post[1]->slug)}}">Leer más</a>
			</article>
			<article>
			@if(!empty($post[2]->postImages) && count($post[2]->postImages) > 0)
            		<?php $randomIndex = rand(0, count($post[2]->postImages) - 1); ?>
            		<img src="{{ asset('storage/images/'.$post[2]->postImages[$randomIndex]->path) }}" alt="" height="70px" weight="70px">
            	@else
                	<img src="{{ asset('images/img1.png') }}" alt="Artículo Reciente 2" height="70px" weight="70px">
            	@endif
				<h2>{{$post[2]->title}}</h2>
				<p>{{Str::limit($post[2]->body, 150)}}</p>
				<a href="{{ route('post', $post[2]->slug)}}">Leer más</a>
			</article>
			<article>
				@if(!empty($post[3]->postImages) && count($post[3]->postImages) > 0)
            		<?php $randomIndex = rand(0, count($post[3]->postImages) - 1); ?>
            		<img src="{{ asset('storage/images/'.$post[3]->postImages[$randomIndex]->path) }}" alt="" height="70px" weight="70px">
            	@else
                	<img src="{{ asset('images/img1.png') }}" alt="Artículo Reciente 1" height="70px" weight="70px">
            	@endif
				<h2>{{$post[3]->title}}</h2>
				<p>{{Str::limit($post[3]->body, 150)}}</p>
				<a href="{{ route('post', $post[3]->slug)}}">Leer más</a>
			</article>
		</section>
@endsection
