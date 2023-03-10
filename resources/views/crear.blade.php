@extends('layouts.app')
@section('PageTitulo')
{{ __('Nuevo articulo') }}
@endsection

@section('content')

<br>

<div class="container mt-5">
<div class="d-flex align-items-center" style="height: 100vh;" style="weight: 100vh;">
    <div class="mx-auto">

{!! Form::open(['route' => 'posts.store', 'files' => true, 'class' => 'form-horizontal']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Título', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Escriba el título del artículo']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Cuerpo o texto', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Escriba el texto de su blog!']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('references', 'Referencias', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('references', null, ['class' => 'form-control', 'placeholder' => 'Escriba sus referencias (Libros, páginas, etc)']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('images[]', 'Imágenes', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::file('images[]', ['class' => 'form-control', 'multiple']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {!! Form::submit('CREAR', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
{!! Form::close() !!}

</div>
</div>
</div>
@endsection
