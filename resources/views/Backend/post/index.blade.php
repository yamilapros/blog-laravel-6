@extends('Backend.layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Post</h1>
    @include('Backend.includes.message')
    <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('post.create') }}" role="button">Add new post</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Slug</th>
                            <th>Created at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->subtitle }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td><a href="{{ route('post.edit', ['id' => $post->id]) }}"><i class="far fa-edit"></i></a></td>
                            <td><a href="{{ route('post.delete', ['id' => $post->id]) }}"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div style="height: 100vh;"></div>
    <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
</div>
@endsection