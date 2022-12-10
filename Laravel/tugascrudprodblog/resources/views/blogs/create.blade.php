@extends('master')

@section('title', 'Create Blog Post')

@section('content_master')

<a href="{{ route('blogs.index') }}" class="mt-2 font-semibold text-slate-800 hover:text-green-300 transition duration-200 ease-in-out">Kembali</a>
<div class="relative block p-8 mt-8 overflow-hidden border bg-white border-slate-100 rounded-lg">

    @if (session()->has('success'))
        <div class="bg-green-500 text-white font-bold rounded py-2 px-4 mb-4">
            {{ session()->get('success') }}
        </div>
    @endif


    @if($errors->any())
        <div class="mb-4">
            <div class="bg-red-500 text-white font-bold rounded-t py-2 px-4">
                Something went wrong...
            </div>
            <ul class="border border-t-0 border-red-400 rounded-b px-4 py-3 text-red-700">
                @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        action="{{ route('blogs.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        <div class="-mx-3 flex flex-wrap">
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label
                    for="title"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                    Title
                    </label>
                    <input
                    type="text"
                    name="title"
                    id="title"
                    placeholder="Title..."
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md"
                    />
                </div>
            </div>
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label
                    for="category"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                    Category
                    </label>
                    <input
                    type="text"
                    name="category"
                    id="category"
                    placeholder="Category..."
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md"
                    />
                </div>
            </div>
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label
                    for="author_name"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                    Author Name
                    </label>
                    <input
                    type="text"
                    name="author_name"
                    id="author_name"
                    placeholder="Author Name..."
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md"
                    />
                </div>
            </div>
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label
                    for="thumbnail"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                    Thumbnail
                    </label>
                    <input
                    type="file"
                    name="thumbnail"
                    id="thumbnail"
                    placeholder="Thumbnail..."
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md"
                    accept="image/*"
                    />
                </div>
            </div>
            <div class="w-full px-3">
                <div class="mb-5">
                    <label
                    for="body"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                    Body
                    </label>
                    <textarea name="body" id="body" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md" cols="30" rows="5" placeholder="Content..."></textarea>
                </div>
            </div>

            <div class="w-full px-3">
                <button
                    type="submit"
                    class="hover:shadow-form rounded-md bg-green-400 py-3 px-8 text-center text-base font-semibold text-white outline-none"
                >
                    Create Post
                </button>
            </div>

        </div>
    </form>
</div>

@endsection