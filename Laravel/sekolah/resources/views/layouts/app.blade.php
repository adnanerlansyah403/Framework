@extends('layouts.master')

@section('title', 'List of Users')

@section('content_master')

    <a href="{{ route('users.create') }}">Tambah User</a>

    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Tingkatan</th>
                <th>Nisn</th>
                <th>Alamat</th>
                <th>Gender</th>
                <th>Sekolah</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @switch($user->role) 
                            @case(1) Admin @break
                            @case(2) Siswa @break
                            default Guest @break 
                        @endswitch  
                    </td>
                    <td>{{$user->tempat_lahir}}</td>
                    <td>{{$user->tanggal_lahir}}</td>
                    <td>{{$user->tingkatan}}</td>
                    <td>{{$user->nisn}}</td>
                    <td>{{$user->alamat}}</td>
                    <td>{{$user->gender}}</td>
                    <td>{{$user->sekolah->name}}</td>
                    <td>{{$user->keterangan ? $user->keterangan : 'Tidak ada keterangan'}}</td>
                    <td>{{$user->is_active ? 'Active' : 'Inactive'}}</td>
                    <td>
                        <a href="{{ route('users.destroy', $user->id) }}">
                            <button>Delete</button>
                        </a>
                        <a href="{{ route('users.edit', $user->id) }}">
                            <button>Detail</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop