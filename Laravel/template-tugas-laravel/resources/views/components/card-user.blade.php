
<ul style="list-style: none; margin-bottom: 10px;" class="p-4 rounded-lg bg-white shadow-lg flex-auto">
    <li class="w-full pb-4">
        <img src="{{ $user['foto'] }}" alt="" class="w-full h-full object-cover">
    </li>
    <li>
        <p>
            <b>Nama: </b>{{ $user['nama'] }}
        </p>
    </li>
    <li>
        <p>
            <b>Bio: </b>{{ $user['bio'] }}
        </p>
    </li>
    <li>
        <p>
            <b>Alamat: </b>{{ $user['alamat'] }}
        </p>
    </li>
    <li>
        <p>
            <b>Role: </b>{{ strtoupper($user['role']) }} {!! $icon !!}
        </p>
    </li>
    <li>
        <a href="">
            Details
        </a>
    </li>
</ul>