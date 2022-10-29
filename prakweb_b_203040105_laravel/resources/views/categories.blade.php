{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Categories : {{ $category }}</h1>

@foreach ($categories as $category)

  <article class="mb-5">
    <h2>
      <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    {{-- <h5>By: {{ $post["author"] }}</h5> --}}
    <p>{{ $post->excerpt }}</p>
  </article>
  <ul>
    <li>
    <h2><a href="/category{{ $category->slug }}">{{ $category->name }}</a></h2>
    </li>
</ul>
  
@endforeach
  
<a class="btn btn-primary btn-m mt-4" href="/">back to Home</a>

@endsection