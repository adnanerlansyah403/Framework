@extends('layouts.master')

@section('title', "User - {{ $user->name }}")

@section('content_master')


<a href="{{ url('/') }}">Kembali</a>

<form action="{{ route('users.update', $user->id) }}" method="POST">
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
</form>

@stop