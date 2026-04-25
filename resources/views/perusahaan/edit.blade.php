<!DOCTYPE html>
<html>
<head>
    <title>Edit Perusahaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Data</h2>

    <form action="/perusahaan/{{ $data->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Perusahaan</label>
            <input type="text" name="nama_perusahaan" value="{{ $data->nama_perusahaan }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" value="{{ $data->alamat }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" value="{{ $data->no_hp }}" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="/perusahaan" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>