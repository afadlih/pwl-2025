<!DOCTYPE html>
<html>
    <head></head>
        <title>Data User</title>
    </head>
    <body>
        <h1>Data User</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>ID Level Pengguna</th>
            
            </tr>
            @foreach($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->username }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->level_id }}</td>
            </tr>
        
            @endforeach
                </table>
            </body>
        </html>