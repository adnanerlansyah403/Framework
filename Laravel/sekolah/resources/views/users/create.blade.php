@extends('layouts.master')

@section('title', 'Create User')

@section('content_master')

<a href="{{ url('/') }}" class="btn-success">Kembali</a>

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
        action="{{ route('users.store') }}"
        method="POST"
        class=""
    >
        @csrf
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                        for="name"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                        Full Name
                        </label>
                        <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Your name..."
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md"
                        />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                        for="email"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                        Email
                        </label>
                        <input
                        type="text"
                        name="email"
                        id="email"
                        placeholder="Your email..."
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md"
                        />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                        for="password"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                        Password
                        </label>
                        <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Your password..."
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md"
                        />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                        for="tempat_lahir"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                        Tempat Lahir
                        </label>
                        <input
                        type="text"
                        name="tempat_lahir"
                        id="tempat_lahir"
                        placeholder="Your birthplace ..."
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md"
                        />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                        for="tanggal_lahir"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                        Tanggal Lahir
                        </label>
                        <input 
                        class="border rounded w-full py-2 px-3 text-grey-darker" type="date"
                        name="tanggal_lahir" >
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                        for="nisn"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                        Nisn
                        </label>
                        <input
                        type="number"
                        name="nisn"
                        id="nisn"
                        placeholder="Your nisn..."
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md"
                        />
                    </div>
                </div>
                <div class="w-full px-3">
                    <div class="mb-5">
                        <label
                        for="alamat"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                        Alamat
                        </label>
                        <textarea name="alamat" id="" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md" cols="30" rows="5" placeholder="Your address"></textarea>
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                        for="tingkatan"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Tingkatan
                        </label>
                        <select name="tingkatan" id="" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md">
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="smk">SMK</option>
                        </select>
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                        for="gender"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Gender
                        </label>
                        <select name="gender" id="" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md">
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                        for="role"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Role
                        </label>
                        <select name="role" id="" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md">
                            <option value="1">Admin</option>
                            <option value="2">Siswa</option>
                            <option value="3">Guest</option>
                        </select>
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                        for="id_sekolah"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Sekolah
                        </label>
                        <select name="id_sekolah" id="" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md">
                            @forelse ($sekolah as $s)
                                <option value="{{ $s->id }}">{{ $s->name }}</option>
                            @empty
                                <option value="">Kosong</option>
                            @endforelse
                        </select>
                    </div>
                </div>

                <div class="w-full px-3">
                    <button
                        type="submit"
                        class="hover:shadow-form rounded-md bg-green-400 py-3 px-8 text-center text-base font-semibold text-white outline-none"
                    >
                    Create User
                </button>
                </div>

        </div>
    </form>
</div>

@stop