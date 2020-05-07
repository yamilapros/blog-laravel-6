@extends('Backend.layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Edit category</h1>
    <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Category title</label>
                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ $category->name }}">
                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
              <div class="form-group">
                  <label for="slug">Category slug</label>
                  <input type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" id="slug" name="slug" value="{{ $category->slug }}">
                  @if ($errors->has('slug'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('slug') }}</strong>
                    </span>
                  @endif
                </div>
              <button type="submit" class="btn btn-primary">Update</button>
              <a class="btn btn-warning" href="{{ route('category.index') }}" role="button">Back</a>
        </div>
    </div>
    </form>
</div>
@endsection
