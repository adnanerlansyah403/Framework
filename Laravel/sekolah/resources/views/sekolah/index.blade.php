@extends('layouts.master')

@section('title', 'List of Users')

@section('content_master')

@php
    $currentRoute = Route::currentRouteName();
@endphp


<div class="w-full">
    <h1 class="text-center py-4 text-[4rem] font-bold font-poppins">All Data</h1>
    <a href="{{ route('sekolah.create') }}" class="btn-success">Tambah Sekolah</a>
    <div class="bg-white py-4 md:py-7 shadow-lg rounded-lg mt-8">
        <div class="sm:flex items-center justify-between px-2 md:px-4 xl:px-10 w-full">
            <div class="flex items-center mx-auto">
                <a class="rounded-full focus:outline-none focus:ring-2  focus:bg-indigo-50 focus:ring-indigo-800" href=" javascript:void(0)">
                    <a href="{{ route('index') }}" class="{{ $currentRoute == 'index' ? 'linkActive' : '' }}">
                        <p>Siswa</p>
                    </a>
                </a>
                <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="javascript:void(0)">
                    <a href="{{ route('sekolah.index') }}" class="{{ $currentRoute == 'sekolah.index' ? 'linkActive' : '' }}">
                        <p>Sekolah</p>
                    </a>
                </a>
            </div>
        </div>
            
        @if (session()->has('success'))
        <div class="bg-green-500 text-white font-bold rounded py-2 px-4 mb-4">
            {{ session()->get('success') }}
        </div>
        @endif

        <div class="mt-7 overflow-x-auto">
            <table class="w-full whitespace-nowrap">
                <tbody>
                    @foreach ($sekolah as $s)
                        <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded pr-4">
                            <td>
                                <div class="ml-5">
                                    <div class="{{ $s->tingkatan == 'sd' ? 'bg-red-200' : ($s->tingkatan == 'smp' ? 'bg-blue-400' : 'bg-blue-600') }} rounded-sm w-5 h-5 flex flex-shrink-0 justify-center items-center relative">
                                    </div>
                                </div>
                            </td>
                            <td class="">
                                <div class="flex items-center pl-2">
                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                        {{ Str::limit($s->name . '(' . $s->email . ')', 30) }}
                                    </p>
                                </div>
                            </td>
                            <td class="">
                                <div class="flex items-center pl-2">
                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                        {{ Str::limit($s->alamat, 50) }}
                                    </p>
                                </div>
                            </td>
                            <td class="">
                                <div class="flex items-center pl-2">
                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                        {{ $s->no_telp }}
                                    </p>
                                </div>
                            </td>
                            <td class="">
                                <div class="flex items-center pl-2">
                                    <p class="text-base font-medium leading-none text-gray-700 mr-2 {{ $s->status == 1 ? 'btn-active' : 'btn-inactive' }}">
                                        {{ $s->status == 1 ? 'Active' : 'Inactive' }}
                                    </p>
                                </div>
                            </td>
                            <td class="">
                                <div class="flex items-center pl-2">
                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                        {{ $s->deskripsi }}
                                    </p>
                                </div>
                            </td>
                            <td class="flex justify-center items-center gap-2 h-[80px]">
                                <a href="{{ route('sekolah.destroy', $s->id) }}" class="py-3 px-3 text-sm focus:outline-none leading-none text-red-700 bg-red-100 rounded">
                                    <ion-icon name="trash-outline"></ion-icon>
                                </a>
                                <a href="{{ route('sekolah.edit', $s->id) }}" class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-3 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">
                                    <ion-icon name="pencil-outline"></ion-icon>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        <div class="px-4 pt-6">
            {{ $sekolah->links('pagination::tailwind') }}
        </div>
    </div>
</div>


@stop