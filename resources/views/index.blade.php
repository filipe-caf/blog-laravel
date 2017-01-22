@extends('template')

@section('title')
  Blog Laravel
@stop


@section('title-slide')
  <div class="site-heading">
    <h1>Laravel 5</h1>
    <hr class="small">
    <span class="subheading">Mini blog feito com Laravel 5.1</span>
  </div>
@stop

@section('content')
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
      @foreach($posts as $post)
        <div class="post-preview">
            <a href="post/{{$post['title']}}/{{$post['subtitle']}}/{{$post['text']}}">
                <h2 class="post-title">
                    {{$post['title']}}
                </h2>
                <h3 class="post-subtitle">
                    {{$post['subtitle']}}
                </h3>
            </a>
            <p class="post-meta">Postado por {{$post['author']}} em {{$post['date']}}</p>
        </div>
        <hr>
      @endforeach
    </div>
  </div>
@stop
