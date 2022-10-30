@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
       <div class="col-md-3">
        <h1>{{ $post->title }}</h1>

        <p>
            By. 
            <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
            in 
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </p>
    
        {{-- <h5>{{ $post["author"] }}</h5> --}}
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
         
        <article class="my-3 fs-5">
        {!! $post->body !!}
        </article>
    
        </article>
    
        <a href="/blog" class="text-decoration-none">back to posts</a>

        </div> 
    </div>
</div>


<article>
  

    
@endsection
