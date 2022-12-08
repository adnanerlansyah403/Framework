@extends('layouts.master')

@section('title', 'List of Users')

@section('content_master')

@php
    $currentRoute = Route::currentRouteName();
@endphp

<div class="w-full">
    <h1 class="text-center py-4 text-[4rem] font-bold font-poppins">All Data</h1>
    <a href="{{ route('users.create') }}" class="btn-success">Tambah User</a>
    <div class="bg-white py-4 md:py-7 shadow-lg rounded-lg mt-8">
        <div class="sm:flex items-center justify-between px-2 md:px-4 xl:px-10 w-full">
            <div class="flex items-center mx-auto">
                <a class="rounded-full focus:outline-none focus:ring-2  focus:bg-indigo-50 focus:ring-indigo-800" href=" javascript:void(0)">
                    <a href="{{ route('index') }}" class="{{ $currentRoute == 'index' ? 'linkActive' : '' }}">
                        <p>Siswa</p>
                    </a>
                </a>
                <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="javascript:void(0)">
                    <a href="{{ route('sekolah.index') }}" class="{{ $currentRoute == 'sekolah' ? 'linkActive' : '' }}">
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
                    @foreach ($users as $user)
                        <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded pr-4">
                            <td>
                                <div class="ml-5">
                                    <div class="{{ $user->tingkatan == 'sd' ? 'bg-red-200' : ($user->tingkatan == 'smp' ? 'bg-blue-400' : 'bg-blue-600') }} rounded-sm w-5 h-5 flex flex-shrink-0 justify-center items-center relative">
                                        <img src="" alt="">
                                    </div>
                                </div>
                            </td>
                            <td class="">
                                <div class="flex items-center pl-2">
                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                        {{ $user->name }}({{ $user->email }})
                                    </p>
                                </div>
                            </td>
                            <td class="pl-2">
                                <div class="flex items-center">
                                    <p class="text-sm leading-none text-gray-600 ml-2">
                                        @switch($user->role)
                                            @case(1) Admin @break
                                            @case(2) Siswa @break
                                            @default Guest @break
                                        @endswitch
                                        ({{ strtoupper($user->tingkatan) }})
                                    </p>
                                </div>
                            </td>
                            <td class="pl-3">
                                <div class="flex items-center">
                                    <p class="text-sm leading-none text-gray-600 ml-2">{{ $user->tempat_lahir }}</p>
                                </div>
                            </td>
                            <td class="pl-3">
                                <div class="flex items-center">
                                    <p class="text-sm leading-none text-gray-600 ml-2">
                                        {{ $user->tanggal_lahir }}
                                    </p>
                                </div>
                            </td>
                            <td class="pl-3">
                                <div class="flex items-center">
                                    <p class="text-sm leading-none text-gray-600 ml-2">
                                        {{ $user->nisn }}
                                    </p>
                                </div>
                            </td>
                            <td class="pl-3">
                                <div class="flex items-center">
                                    <p class="text-sm leading-none text-gray-600 ml-2">
                                        {{ $user->gender }}
                                    </p>
                                </div>
                            </td>
                            <td class="pl-3">
                                <div class="flex items-center">
                                    <p class="text-sm leading-none text-gray-600 ml-2">{{ $user->sekolah->name }}</p>
                                </div>
                            </td>
                            <td class="pl-4 flex justify-center items-center gap-2 h-[80px]">
                                <a href="{{ route('users.destroy', $user->id) }}" class="py-3 px-3 text-sm focus:outline-none leading-none text-red-700 bg-red-100 rounded">
                                    <ion-icon name="trash-outline"></ion-icon>
                                </a>
                                <a href="{{ route('users.edit', $user->id) }}" class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-3 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">
                                    <ion-icon name="pencil-outline"></ion-icon>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

{{ $users->links('pagination::tailwind') }}

@stop