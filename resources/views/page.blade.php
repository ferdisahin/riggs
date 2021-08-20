@extends('layouts.app')
@section('title', $page->title)

@section('content')
    <div class="header text-center">
        <h1 class="font-black text-gray-800 text-4xl my-5">{{$page->title}}</h1>
        <div class="mt-5 text-gray-600 text-lg post-content">
            {!! $page->body !!}
        </div>
    </div>
@endsection
