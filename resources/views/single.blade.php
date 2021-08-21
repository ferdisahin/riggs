@extends('layouts.app')
@section('title', $post->title)

@section('content')
    <div class="header text-center mt-10">
        <div class="text-gray-600">{{$post->created_at->translatedFormat('j F Y')}}</div>
        <h1 class="font-black text-gray-800 text-4xl my-5">{{$post->title}}</h1>
        <a href="{{route('category.show', $post->category->slug)}}" class="text-gray-600 font-medium my-3 bg-gray-100 py-2 px-4 inline-block rounded-md">{{$post->category->title}}</a>
        <img class="mt-5 w-full max-h-[500px] object-cover rounded-md" src="{{$post->cover}}" alt="{{$post->title}}">
    </div>
    <div class="content">
        <div class="mt-5 text-gray-600 text-lg post-content">
            {!! get_content($post->body) !!}
        </div>
    </div>
@endsection
