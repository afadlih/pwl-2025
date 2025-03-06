<!DOCTYPE html>
<html>

<head>
    <title>Data User Pengguna</title>
</head>

<body>
    {{-- Tampilkan Data User --}}
    <h1>Data User Pengguna</h1>
    <a href="{{ url('/user/tambah') }}">+ Tambah User</a>
    <br>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama user</th>
            <th>ID Leevel user</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->user_id }}</td>
                <td>{{ $d->username }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->level_id }}</td>
                <td>
                    <a href="{{ url('/user/ubah/' . $d->user_id) }}">Ubah</a> ||
                    <a href="{{ url('/user/hapus/' . $d->user_id) }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
