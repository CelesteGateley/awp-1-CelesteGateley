@extends('bases.content')

@section('title', 'Posts')

@section('content')
    @foreach ($posts as $post)
        @include('parts.blog.min', ['title' => $post->title, 'body' => $post->post, 'author' => $post->author(), 'date' => $post->created_at->format('l jS F Y \\a\\t h:iA'), ])
        <p></p>
    @endforeach
@endsection