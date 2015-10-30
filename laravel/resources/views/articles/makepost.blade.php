@extends('app')

@section('content')
  <h1>Make a New Thread</h1>

  </hr>

  {!! Form::open(['url' => 'articles']) !!}
    <div class="form-group">
      {!! Form::label('title', 'Title:') !!}
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('body', 'Main Text:') !!}
      {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Add Thread', ['class' => 'btn btn-primary form-control']) !!}
    </div>
  {!! Form::close() !!}
@stop
