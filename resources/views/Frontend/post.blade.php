@extends('Frontend.layouts.app')

@section('bg-img', asset('blog/img/post-bg.jpg'))
@section('title', $post->title)
@section('subtitle', $post->subtitle)

@section('content')
<!-- Post Content -->
<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <h2 class="post-title">{{$post->title}}</h2>
          <h3 class="post-subtitle">{{$post->subtitle}}</h3>
          <p>{!! $post->body !!}</p>
        </div>
      </div>
    </div>
  </article>

  <hr>
@endsection