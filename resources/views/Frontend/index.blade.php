@extends('Frontend.layouts.app')

@section('bg-img', asset('blog/img/home-bg.jpg'))

@section('content')
<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      @foreach($posts as $post)
      <div class="post-preview">
        <a href="{{ route('user.post', ['slug' => $post->slug]) }}">
          <h2 class="post-title">
            {{$post->title}}
          </h2>
          <h3 class="post-subtitle">
            {{$post->subtitle}}
          </h3>
        </a>
        <p class="post-meta">Posted by
          <a href="#">Start Bootstrap</a>
          on {{$post->created_at->format('d-m-Y')}}</p>
      </div>
      @endforeach
      <hr>
      
      <!-- Pager -->
      <div class="clearfix">
        {{ $posts->links() }}
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
      </div>
    </div>
  </div>
</div>

<hr>
@endsection