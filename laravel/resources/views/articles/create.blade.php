@extends('app')

@section('content')
  <h1>Create Forum Post</h1>
  <hr/>

  {!! Form::open(['url' => 'articles']) !!}
    @include('articles.form', ['submitButtonText' => 'Add Post'])
  {!! Form::close() !!}

    @include('errors.list')
@stop
