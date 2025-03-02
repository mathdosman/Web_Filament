@extends('layout')
@section('title',' | Halaman Utama')
@section('description','math_dosman')

@section('content')

    @foreach ($posts as $value)
        <article class="flex w-full my-4 rounded-md">
            <!-- Article Image -->
            <a href="/posts/{{ $value->id }}/{{ $value->slug }}" class="hover:opacity-75 w-1/4 display-block bg-cover bg-center bg-[url('/storage/{{ $value->thumbnail }}')]">
            </a>
            <div class="bg-white flex w-3/4 flex-col justify-start p-6">
                
                <a href="/posts/{{ $value->id }}/{{ $value->slug }}" class="text-2xl font-bold hover:text-gray-700 pb-4">{{ $value->title }}</a>
                <a href="/posts/{{ $value->id }}/{{ $value->slug }}" class="pb-6">{{ $value->description }} | <span class="font-bold text-blue-700">{{ $value->category_title }}</span></a>
                <a href="/posts/{{ $value->id }}/{{ $value->slug }}" class="text-indigo-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
            </div>
        </article>
    @endforeach

    {{ $posts->links() }}

<!-- Pagination -->
{{-- <div class="flex items-center py-8">
    <a href="#" class="h-10 w-10 bg-indigo-800 hover:bg-indigo-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
    <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:bg-indigo-600 hover:text-white text-sm flex items-center justify-center">2</a>
    <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next <i class="fas fa-arrow-right ml-2"></i></a>
</div> --}}
@endsection