@extends('layouts.master')

@section('title', "Sekolah - $sekolah->name")

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
        action="{{ route('sekolah.update', $sekolah->id) }}"
        method="POST"
    >
        @csrf
        @method('PATCH')
        <div class="-mx-3 flex flex-wrap">
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label
                    for="name"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                    Name
                    </label>
                    <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Name..."
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md"
                    value="{{ $sekolah->name }}"
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
                    placeholder="Email..."
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md"
                    value="{{ $sekolah->email }}"
                    />
                </div>
            </div>
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label
                    for="no_telp"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                        No Telepon
                    </label>
                    <input
                    type="number"
                    name="no_telp"
                    id="no_telp"
                    placeholder="No Telepon..."
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md"
                    value="{{ $sekolah->no_telp }}"
                    />
                </div>
            </div>
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label
                    for="nis"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                        No Nis
                    </label>
                    <input
                    type="number"
                    name="nis"
                    id="nis"
                    placeholder="No Nis..."
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md"
                    value="{{ $sekolah->nis }}"
                    />
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
                        <option value="sd" {{ $sekolah->tingkatan == 'sd' ? 'selected' : '' }}>SD</option>
                        <option value="smp" {{ $sekolah->tingkatan == 'smp' ? 'selected' : '' }}>SMP</option>
                        <option value="smk" {{ $sekolah->tingkatan == 'smk' ? 'selected' : '' }}>SMK</option>
                    </select>
                </div>
            </div>
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label
                    for="status"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                        Status
                    </label>
                    <select name="status" id="" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md">
                        <option value="1" {{ $sekolah->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $sekolah->status == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
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
                    <textarea name="alamat" id="" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md" cols="30" rows="5" placeholder="Address...">{{ $sekolah->alamat }}</textarea>
                </div>
            </div>
            <div class="w-full px-3">
                <div class="mb-5">
                    <label
                    for="deskripsi"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                    Deskripsi
                    </label>
                    <textarea name="deskripsi" id="" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md" cols="30" rows="5" placeholder="Description...">{{ $sekolah->deskripsi }}</textarea>
                </div>
            </div>

            <div class="w-full px-3">
                <button
                    type="submit"
                    class="hover:shadow-form rounded-md bg-green-400 py-3 px-8 text-center text-base font-semibold text-white outline-none"
                >
                    Update School
                </button>
            </div>

        </div>
    </form>
</div>

@stop