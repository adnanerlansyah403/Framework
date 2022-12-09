@extends('master')

@section('title', 'Daftar User')

{{-- @section('icon', 'logo.png') --}}

@section('content_master')
@php
    $users = [
        [
            "nama" => "Adnan Erlansyah",
            "foto" => "assets/images/users/user1.png",
            "bio" => "Saya tinggal di bekasi, sekarang berumur 19 tahun",
            "active" => true,
            "alamat" => "Desa. Cikarang Kota, Bekasi",
            "role" => "admin"
        ],
        [
            "nama" => "Farid Maulana",
            "foto" => "assets/images/users/user1.png",
            "bio" => "Saya tinggal di indramay, sekarang berumur 19 tahun",
            "active" => false,
            "alamat" => "Desa. Haurgeulis, Jawa Barat",
            "role" => "admin"
        ],
        [
            "nama" => "Bayu Tresna",
            "foto" => "assets/images/users/user1.png",
            "bio" => "Saya tinggal di bandung, sekarang berumur 22 tahun",
            "active" => true,
            "alamat" => "Desa. Cikarang Kota, Bekasi",
            "role" => "user"
        ],
        [
            "nama" => "Muhammad Rijal",
            "foto" => "assets/images/users/user1.png",
            "bio" => "Saya tinggal di bandung, sekarang berumur 19 tahun",
            "active" => true,
            "alamat" => "Desa. Cibuduk, Dago",
            "role" => "user"
        ],
        [
            "nama" => "Isman Maulana",
            "foto" => "assets/images/users/user1.png",
            "bio" => "Saya tinggal di yogyakarta, sekarang berumur 22 tahun",
            "active" => false,
            "alamat" => "Desa. Cikuduk, Yogyakarta",
            "role" => "admin"
        ],
        [
            "nama" => "Obi Pratama",
            "foto" => "assets/images/users/user1.png",
            "bio" => "Saya tinggal di papua, sekarang berumur 19 tahun",
            "active" => false,
            "alamat" => "Penggulungan Siamble, Papua",
            "role" => "admin"
        ],
        [
            "nama" => "Valentino Rossi",
            "foto" => "assets/images/users/user1.png",
            "bio" => "Saya tinggal di Bekasi, sekarang berumur 36 tahun",
            "active" => false,
            "alamat" => "Desa. Cikarang Barat, Bekasi",
            "role" => "admin"
        ],
        [
            "nama" => "Abdul Rahman",
            "foto" => "assets/images/users/user1.png",
            "bio" => "Saya tinggal di Surabaya, sekarang berumur 28 tahun",
            "active" => true,
            "alamat" => "Desa. Cilacap, Surabaya",
            "role" => "admin"
        ],
        [
            "nama" => "Endjiansyah",
            "foto" => "assets/images/users/user1.png",
            "bio" => "Saya tinggal di indramay, sekarang berumur 19 tahun",
            "active" => true,
            "alamat" => "Desa. Jepara, Jawa Barat",
            "role" => "user"
        ],
        [
            "nama" => "Tegar Hakim",
            "foto" => "assets/images/users/user1.png",
            "bio" => "Saya tinggal di malaysia, sekarang berumur 24 tahun",
            "active" => true,
            "alamat" => "Desa. Kuala Lumpur, Malaysia",
            "role" => "admin"
        ],
    ];
    $filter = [
        "active" => true,
        "role" => "admin",
    ];

@endphp    
@parent

@foreach ($users as $user)
    @includeWhen($user['active'] === $filter['active'], 'components.card-user', [
        'icon' => $user['role'] == 'user' ? '<ion-icon name="person-outline"></ion-icon>' : '<ion-icon name="skull-outline"></ion-icon>'
    ])
@endforeach

@endsection

