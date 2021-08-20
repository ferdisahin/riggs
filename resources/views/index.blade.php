@extends('layouts.app')
@section('title', 'Anasayfa')

@section('content')
    <div class="grid grid-cols-3 gap-5">
        @foreach($posts as $post)
            <div class="flex flex-col">
                <a class="mb-5 block" href="{{route('post.show', ['cat' => $post->category->slug, 'post' => $post->slug])}}">
                    <img class="w-full h-[200px] object-cover" src="{{$post->cover}}" alt="">
                </a>
                <a href="{{route('post.show', ['cat' => $post->category->slug, 'post' => $post->slug])}}" class="title text-lg font-bold inline-block">{{$post->title}}</a>

                <a href="{{route('category.show', $post->category->slug)}}" class="text-sm text-gray-600 font-medium my-3">{{$post->category->title}}</a>

                <div class="content text-gray-700 two-line">{{\Illuminate\Support\Str::limit(strip_tags($post->body), 100)}}</div>
            </div>
        @endforeach
    </div>
    <div class="mt-5">
        {{$posts->links('vendor.pagination.simple-tailwind')}}
    </div>
@endsection
