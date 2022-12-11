@extends('master')

@section('title', "List Blog")

@section('content_master')

    <h1 class="text-2xl text-slate-600">List Blog</h1>

    <a href="{{ route('blogs.create') }}" class="mt-2 mb-4 font-semibold text-slate-800 hover:text-green-300 transition duration-200 ease-in-out">Tambah Blog</a>

    <div class="flex flex-wrap gap-4 w-full">
        @forelse ($blogs as $post)
            <!-- Card -->
            <div class=" flex-auto bg-white p-8 w-[32rem] shadow-lg rounded"> 
    
                <!-- Header -->
                <header class="flex font-light text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-90 -ml-2"  viewBox="0 0 24 24" stroke="#16a34a">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                </svg>
                    <p>{{ $post->category }}</p>
                </header>
    
                <!-- Title -->
                <h2 class="font-bold text-3xl mt-2">
                {{ Str::limit($post->title, 30, '...') }}
                </h2>
    
                <!-- Tags -->
                <p class="mt-5"> 
                By: 
                    <a href="#" class="text-green-600"> {{ $post->author_name }} </a
                </p>
    
                <!-- Description -->
                <h3 class="font-bold text-xl mt-8"> Intro </h3>
                <p class="font-light"> 
                    {{ Str::limit($post->body, 100) }}    
                </p>
    
                <!-- Button -->
                <a href="{{ route('blogs.show', $post->id) }}" class="bg-green-600 text-white font-semibold py-2 px-5 text-sm mt-6 inline-flex items-center group">
                <p> READ MORE </p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-2 delay-100 duration-200 ease-in-out" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                </a>
                <a href="{{ route('blogs.destroy', $post->id) }}" class="bg-red-600 text-white font-semibold py-2 px-5 text-sm mt-6 inline-flex items-center group">
                <p> DELETE </p>
                </a>
    
            </div>
        @empty
            <h1 class="flex items-center justify-center w-full text-6xl text-center text-slate-500 mt-32 font-bold">Blog Sedang Kosong 😌</h1>
        @endforelse
    </div>

@endsection