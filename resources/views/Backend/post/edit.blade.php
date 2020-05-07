@extends('Backend.layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Edit post</h1>
    <form action="{{ route('post.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="title">Post title</label>
                <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" value="{{ $post->title }}">
                @if ($errors->has('title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="subtitle">Post subtitle</label>
                <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="subtitle" name="subtitle" value="{{ $post->subtitle }}">
                @if ($errors->has('subtitle'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('subtitle') }}</strong>
                </span>
            @endif
            </div>
            <div class="form-group">
                <label for="slug">Post slug</label>
                <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="slug" name="slug" value="{{ $post->slug }}">
                @if ($errors->has('slug'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('slug') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="image">Post main image</label>
                <input type="file" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="image" name="image">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="status" name="status" value="1" @if($post->status == 1) {{'checked'}} @endif>
              <label class="form-check-label" for="status">Publish</label>
            </div>
            <div class="form-group">
                <label for="tag">Select tag</label><br>
                <select class="selectpicker" multiple name="tags[]">
                    @foreach($tags as $tag)
                    <option value="{{$tag->id}}"
                        @foreach($post->tags as $postTag)
                            @if($postTag->id == $tag->id)
                                selected
                            @endif
                        @endforeach
                    >{{$tag->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="category">Select Category</label><br>
                <select class="selectpicker" multiple name="categories[]">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}"
                        @foreach($post->categories as $postCategory)
                            @if($postCategory->id == $category->id)
                                selected
                            @endif
                        @endforeach    
                    >{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="body">Post Body</label>
        <textarea class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="body" name="body" rows="3">{{ $post->body }}</textarea>
        @if ($errors->has('body'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('body') }}</strong>
        </span>
        @endif
    </div>
        
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a class="btn btn-warning" href="{{ route('post.index') }}" role="button">Back</a>
    </form>
</div>


<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'body' );
</script>
@endsection