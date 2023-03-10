@extends('layouts.app')
@section('PageTitulo')
{{ __('Nuevo articulo') }}
@endsection

@section('content')

{!! Form::open(['route' => 'posts.store', 'files' => true]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Body') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('images[]', 'Images') !!}
    {!! Form::file('images[]', ['class' => 'form-control', 'multiple']) !!}
</div>

{!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection
