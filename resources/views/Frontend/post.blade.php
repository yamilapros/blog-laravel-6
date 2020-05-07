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
          @if($post->image)
          <div class="post-image">
              <img src="{{ route('post.image', ['filename' => $post->image]) }}" alt="" width="253" height="382">
          </div>
          @else
              <img src="" alt="">
          @endif
        </div>
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1"  style="text-align:center">
          <small>Created at {{ $post->created_at->format('d-m-Y') }}</small>
          @foreach($post->categories as $category)
            <small class="">
              {{ $category->name }}
            </small>
          @endforeach
        </div>
        <div class="col-lg-8 col-md-10 mx-auto">
          <h2 class="post-title">{{$post->title}}</h2>
          <h3 class="post-subtitle">{{$post->subtitle}}</h3>
         
          <p>{!! $post->body !!}</p>
          {{--Tags--}}
          <h3 class="post-subtitle">Tag Clouds</h3>
          @foreach($post->tags as $tag)
            <small class="pull-right" style="margin-right: 20px; border:1px solid gray; border-radius:5px;
            padding:5px">
              {{ $tag->name }}
            </small>
          @endforeach
        </div>
      </div>
    </div>
  </article>

  <hr>
@endsection