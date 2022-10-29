
@extends('layouts.main')

@section('container')


        <h2>{{ $post->title }}</h2>
        
        {!! $post->body !!}
        

<a href="/posts">Back to posts</a>

@endsection


{{-- <p>By. Rafliansyah in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p> --}}