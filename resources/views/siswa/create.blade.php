<!DOCTYPE html>

<html>
<head>
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Tambah Siswa</h2>

<form action="/siswa" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>

    <div class="mb-3">
        <label>NISN</label>
        <input type="text" name="nisn" class="form-control">
    </div>

    <div class="mb-3">
        <label>Jurusan</label>
        <input type="text" name="jurusan" class="form-control">
    </div>

    <button class="btn btn-success">Simpan</button>
    <a href="/siswa" class="btn btn-secondary">Kembali</a>
</form>

</div>

</body>
</html>
