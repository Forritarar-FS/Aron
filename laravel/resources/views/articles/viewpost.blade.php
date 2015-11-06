@extends('app')

@section('content')
  <h1>{{ $article->title }}</h1>
  <?php
  $steamurl = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=1012C5D1952C3AFF2C403F43EADB5047&steamids=76561197960435530');
  $decoded = json_decode($steamurl);
  $avatar = $decoded->response->players[0]->avatarmedium;
  header('Content-type: image/jpeg');
  echo file_get_contents($avatar);
  ?>
  <article>
    {{ $article->body }}
  </article>
@stop
