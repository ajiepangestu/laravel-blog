@extends('layouts.main')
@section('container')
    @if ($posts->count())
        <div class="card mb-3">
            <img class="card-img-top" src="http://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $posts[0]->title }}</h5>
                <p><small class="text-muted">By. <a class="text-decoration-none" href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
    <h1 class="mb-5">Halaman Blog Posts</h1>
    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <h5>By <a href="/author/{{ $post->author->slug }}">{{ $post->author->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
