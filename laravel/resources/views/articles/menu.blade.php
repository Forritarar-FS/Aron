@extends('app')

@section('content')
  <h1>Trades</h1>
  <hr/>
  @foreach ($articles as $article)
    <article>
      <h2><a href="/articles/{{ $article->id }}">{{ $article->title}}</h2></a>

      <div class="body">{{ $article->body }}</div>
    </article>
  @endforeach
@stop
