<!DOCTYPE html>

<html>
<head>
    <title>Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Siswa</h2>

```
<form action="/siswa/{{ $data->id }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $data->nama }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>NISN</label>
        <input type="text" name="nisn" value="{{ $data->nisn }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Jurusan</label>
        <input type="text" name="jurusan" value="{{ $data->jurusan }}" class="form-control">
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="/siswa" class="btn btn-secondary">Kembali</a>
</form>
```

</div>

</body>
</html>
