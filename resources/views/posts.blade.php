@extends('layouts.main')
@section('container')
<h1 class="mb-4">Halaman Posts</h1>

@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-4">
  <h2>
  <a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
  <p>By. <a class="text-decoration-none href="#">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
  </h2>
  <p>{{ $post->excerpt }}</p>

  <a class="text-decoration-none" href="/posts/{{ $post->slug }}">Read more..</a>
</article>  
@endforeach
  

@endsection
