@extends('bases.content')

@section('title', 'All Posts')

@section('content')
    <table style="width: 100%;" class="table">
        <caption>A table listing all Blog Posts</caption>
        <thead class="thead-dark">
        <tr>
            <th scope="col">Post ID</th>
            <th scope="col">Author</th>
            <th scope="col">Title</th>
            <th scope="col">Created On</th>
            <th scope="col">Last Updated</th>
            @if(Auth::check())
                <th scope="col">Delete</th>
            @endif
        </tr>
        </thead>
    @foreach ($posts as $post)
        @include('parts.blog.row', ['id' => $post->id, 'title' => $post->title, 'body' => $post->post, 'author' => $post->poster->name, 'created_on' => $post->created_at, 'updated_on' => $post->updated_at, ])
    @endforeach
    </table>
@endsection
