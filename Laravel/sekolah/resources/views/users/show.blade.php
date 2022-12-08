@extends('layouts.master')

@section('title', "User - $user->name")

@section('content_master')


<a href="{{ url('/sekolah') }}" class="btn-success">Kembali</a>

<!-- component -->
<div
  class="relative block p-8 mt-8 overflow-hidden border bg-white border-slate-100 rounded-lg"
>
  <span
    class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"
  ></span>

  <div class="justify-between sm:flex">
    <div>
      <h5 class="text-xl font-bold text-slate-900">
        {{ $user->name }}({{ $user->email }})
      </h5>
      <p class="mt-1 text-xs font-medium text-slate-600">School at {{ $user->sekolah->name }} ({{ strtoupper($user->tingkatan) }})</p>
    </div>

    <div class="flex-shrink-0 hidden ml-3 sm:block">
       <span class="{{ $user->tingkatan == 'sd' ? 'bg-red-200' : ($user->tingkatan == 'smp' ? 'bg-blue-400' : 'bg-blue-600') }} rounded-sm w-16 h-16 flex flex-shrink-0 justify-center items-center relative"></span>
    </div>
  </div>

  <div class="mt-4 sm:pr-8">
    <p class="text-sm text-slate-500">
        Alamat : {{ $user->alamat }}
    </p>
    <p class="text-sm text-slate-500">
        No Nisn : {{ $user->nisn }}
    </p>
    <p class="text-sm text-slate-500">
        Gender : {{ $user->gender == 'L' ? 'Laki-Laki' : 'Perempuan' }}
    </p>
    <h4 class="text-md text-slate-700 font-semibold mt-2">
        Keterangan :
    </h4>
    <p class="text-sm text-slate-500">
        {{ $user->keterangan }}
    </p>
  </div>

  <dl class="flex mt-6">
    <div class="flex flex-col-reverse">
      <dt class="text-sm font-medium text-slate-600">Date of Birth</dt>
      <dd class="text-xs text-slate-500">{{ $user->tanggal_lahir }}</dd>
    </div>

    <div class="flex flex-col-reverse ml-3 sm:ml-6">
      <dt class="text-sm font-medium text-slate-600">Place of Birth</dt>
      <dd class="text-xs text-slate-500">{{ $user->tempat_lahir }}</dd>
    </div>
    
    <div class="flex flex-col-reverse ml-3 sm:ml-6">
        <dt class="text-sm font-medium text-slate-600">Status</dt>
        <dd class="text-xs text-slate-500">
            @switch($user->role)
                @case(1) Admin @break
                @case(2) Siswa @break
                @default Guest @break
            @endswitch
        </dd>
      </div>
  </dl>
</div>

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
        action="{{ route('users.update', $user->id) }}"
        method="POST"
        class=""
    >
        @csrf
        @method('PUT')
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
                        value="{{ $user->name }}"
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
                        value="{{ $user->email }}"
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
                        value="{{ $user->tempat_lahir }}"
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
                        name="tanggal_lahir" value="{{ $user->tanggal_lahir }}">
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
                        value="{{ $user->nisn }}"
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
                        <textarea name="alamat" id="" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md" cols="30" rows="5" placeholder="Your address">{{ $user->alamat }}</textarea>
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
                            <option value="sd" {{ $user->tingkatan === 'sd' ? 'selected' : '' }}>SD</option>
                            <option value="smp" {{ $user->tingkatan === 'smp' ? 'selected' : '' }}>SMP</option>
                            <option value="smk" {{ $user->tingkatan === 'smk' ? 'selected' : '' }}>SMK</option>
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
                            <option value="L" {{ $user->gender === 'L' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="P" {{ $user->gender === 'P' ? 'selected' : '' }}>Perempuan</option>
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
                            <option value="1" {{ $user->role === 1 ? 'selected' : '' }}>Admin</option>
                            <option value="2" {{ $user->role === 2 ? 'selected' : '' }}>Siswa</option>
                            <option value="3" {{ $user->role === 3 ? 'selected' : '' }}>Guest</option>
                        </select>
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                        for="gender"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Sekolah
                        </label>
                        <select name="id_sekolah" id="" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md">
                            @forelse ($sekolah as $s)
                                <option value="{{ $s->id }}" {{ $user->id_sekolah === $s->id ? 'selected' : '' }}>{{ $s->name }}</option>
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
                    Update User
                </button>
                </div>

        </div>
    </form>
</div>

{{-- <form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Nama</label>
    <input type="text" name="name" placeholder="Your name..." value="{{ old('name', $user->name) }}"><br>
    
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Your email..." value="{{ old('email', $user->email) }}"><br>
    
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Your password..."><br>
     
    <label for="tempat_lahir">Tempat Lahir</label>
    <input type="text" name="tempat_lahir" placeholder="Tempat Lahir..." value="{{ $user->tempat_lahir }}"><br>
    
    <label for="tanggal_lahir">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir..." value="{{ $user->tanggal_lahir }}"><br>
    
    <label for="nisn">NISN</label>
    <input type="number" name="nisn" placeholder="Your nisn..." value="{{ $user->nisn }}"><br>

    <label for="alamat">Alamat</label><br>
    <textarea name="alamat" id="" cols="30" rows="10">{{ $user->alamat }}</textarea><br>
    
    <label for="keterangan">Keterangan</label><br>
    <textarea name="keterangan" id="" cols="30" rows="10">{{ $user->keterangan }}</textarea><br>

    <label for="tingkatan">Tingkatan</label>
    <select name="tingkatan" id="tingkatan">
        <option value="sd" {{ $user->tingkatan === 'sd' ? 'selected' : '' }}>SD</option>
        <option value="smp" {{ $user->tingkatan === 'smp' ? 'selected' : '' }}>SMP</option>
        <option value="smk" {{ $user->tingkatan === 'smk' ? 'selected' : '' }}>SMK</option>
    </select><br>

    <label for="gender">Gender</label>
    <select name="gender" id="gender">
        <option value="L" {{ $user->gender === 'L' ? 'selected' : '' }}>Laki-Laki</option>
        <option value="P" {{ $user->gender === 'P' ? 'selected' : '' }}>Perempuan</option>
    </select><br>
    
    <label for="role">Role</label>
    <select name="role" id="role">
        <option value="1" {{ $user->role === 1 ? 'selected' : '' }}>Admin</option>
        <option value="2" {{ $user->role === 2 ? 'selected' : '' }}>Siswa</option>
        <option value="3" {{ $user->role === 3 ? 'selected' : '' }}>Guest</option>
    </select><br>

    <label for="id_sekolah">Sekolah</label>
    <select name="id_sekolah" id="id_sekolah">
        @foreach ($sekolah as $s)
            <option value="{{ $s->id }}" {{ $user->id_sekolah === $s->id ? 'selected' : '' }}>{{ $s->name }}</option>
        @endforeach
    </select><br>

    <button type="submit">
        Update User
    </button>
</form> --}}

@stop