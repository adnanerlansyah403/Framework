@extends('layouts.master')

@section('title', 'Daftar Sekolah')

@section('content_master')

<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Tingkatan</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sekolah as $s)
            <tr>
                <td>{{$s->name}}</td>
                <td>{{$s->email}}</td>
                <td>{{$s->tempat_lahir}}</td>
                <td>{{$s->tanggal_lahir}}</td>
                <td>{{$s->tingkatan}}</td>
                <td>{{$s->deskripsi ? $s->deskripsi : 'Tidak ada keterangan'}}</td>
                <td>{{$s->is_active ? 'Active' : 'Inactive'}}</td>
                <td>
                    <a href="{{ route('sekolah.edit', $s->id) }}">
                        <button>Detail</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop