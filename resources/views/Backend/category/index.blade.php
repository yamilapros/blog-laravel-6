@extends('Backend.layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Category</h1>
    @include('Backend.includes.message')
    <div class="card mb-4">
        <div class="card-header">
        <a class="btn btn-primary" href="{{ route('category.create') }}" role="button">Add new Category</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td><a href="{{ route('category.edit', ['id' => $category->id]) }}"><i class="far fa-edit"></i></a></td>
                            <td><a href="{{ route('category.delete', ['id' => $category->id]) }}"><i class="far fa-trash-alt"></i></a></td>
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