@extends('layout')
@section('title','{{ $post->title }}')
@section('description','{{ $post->description }}')

@section('content')

<article class="flex w-full flex-col my-4">
    <!-- Article Image -->
    <div class="row justify-between">
        <a href="#" class="hover:opacity-75 block w-full">
            <img src="/storage/{{ $post->thumbnail }}" class="w-full object-cover" style="height: 350px;">
        </a>
    </div>
    <div class="bg-white flex flex-col justify-start p-6">
        <a href="#" class="text-indigo-700 text-sm font-bold uppercase pb-4">{{ $post->category->title }}</a>
        <h1 class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->title }}</h1>
        <p href="#" class="text-sm pb-8">
            Published on {{ $post->created_at->isoFormat('dddd, D MMMM Y')}}
        <p>
            {!! $post->body !!}
        </p>
    </div>
</article>

<div class="w-full flex pt-6">
        <a href="/posts/{{ $prev->id }}/{{ $prev->slug }}" class="w-1/2 bg-white hover:shadow-md text-left p-6">
            <p class="text-lg text-indigo-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Previous</p>
            <p class="pt-2">{{ $prev->title }}</p>
        </a>
    <a href="/posts/{{ $next->id }}/{{ $next->slug }}" class="w-1/2 bg-white hover:shadow-md text-right p-6">
        <p class="text-lg text-indigo-800 font-bold flex items-center justify-end">Next <i class="fas fa-arrow-right pl-1"></i></p>
        <p class="pt-2">{{ $next->title }}</p>
    </a>
</div>


@endsection