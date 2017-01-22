@extends('template')

@section('title')
  test
@stop


@section('title-slide')
  <div class="post-heading">
    <h1>{{$title}}</h1>
    <hr class="small">
    <span class="subheading">{{$subtitle}}</span>
  </div>
@stop

@section('content')
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 text-justify">
              {!! $text !!}
            </div>
        </div>
    </div>
</article>
@stop
