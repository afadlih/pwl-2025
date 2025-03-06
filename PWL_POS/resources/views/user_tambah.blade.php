{{-- Form Tambah Data User --}}
<h1>Form Tambah Data User</h1>
<form action="{{ url('/user/tambah_simpan') }}" method="POST">
    @csrf
    <label>Username</label>
    <input type="text" name="username" placeholder="Masukkan Username">
    <br>
    <label>Nama</label>
    <input type="text" name="nama" placeholder="Masukkan Nama">
    <br>
    <label>Password</label>
    <input type="password" name="password" placeholder="Masukkan Password">
    <br>
    <label>Level ID</label>
    <input type="number" name="level_id" placeholder="Masukkan ID Level">
    <br> <br>
    <input type="submit" class="btn btn-success" value="Simpan">|
</form>
</body>

</html>