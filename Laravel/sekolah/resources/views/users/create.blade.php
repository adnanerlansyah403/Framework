@extends('layouts.master')

@section('title', 'Create User')

@section('content_master')

<a href="{{ url('/') }}">Kembali</a>

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <label for="name">Nama</label>
    <input type="text" name="name" placeholder="Your name..."><br>
    
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Your email..."><br>
    
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Your password..."><br>
    
    <label for="tempat_lahir">Tempat Lahir</label>
    <input type="text" name="tempat_lahir" placeholder="Tempat Lahir..."><br>
    
    <label for="tanggal_lahir">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir..."><br>

    <label for="tingkatan">Tingkatan</label>
    <select name="tingkatan" id="tingkatan">
        <option value="sd">SD</option>
        <option value="smp">SMP</option>
        <option value="smk">SMK</option>
    </select><br>
    
    <label for="nisn">NISN</label>
    <input type="number" name="nisn" placeholder="Your nisn..."><br>

    <label for="alamat">Alamat</label><br>
    <textarea name="alamat" id="" cols="30" rows="10"></textarea><br>

    <label for="gender">Gender</label>
    <select name="gender" id="gender">
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    
    <label for="keterangan">Keterangan</label><br>
    <textarea name="keterangan" id="" cols="30" rows="10"></textarea><br>

    <label for="id_sekolah">Sekolah</label>
    <select name="id_sekolah" id="id_sekolah">
        @foreach ($sekolah as $s)
            <option value="{{ $s->id }}">{{ $s->name }}</option>
        @endforeach
    </select><br>

    <label for="role">Role</label>
    <select name="role" id="role">
        <option value="1">Admin</option>
        <option value="2">Siswa</option>
        <option value="3">Guest</option>
    </select><br>

    <button type="submit">
        Create User
    </button>
</form>

@stop