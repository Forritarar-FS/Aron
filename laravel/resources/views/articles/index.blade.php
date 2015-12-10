@extends('app')

@section('content')
	<?php
  if (!empty(Auth::user())) {
    $username = Auth::user()->name;
  } else {
    $username = "Guest";
  };

  ?>
  <h1>The Forum</h1>  <h4 style="text-align:center;">Welcome, {{ $username }}.</h5>
  <a href="{{ url('/articles', 'create')}}"><h5 style="text-align: right;">Create A Forum Post</a></h5>

  <hr/>
  @foreach ($articles as $article)
    <article>
      <h2>
        <a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a>
      </h2>

      <div class="body">{{ $article->body }}</div>
    </article>
  @endforeach
@stop
