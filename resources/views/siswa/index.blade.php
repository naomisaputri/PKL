<!DOCTYPE html>

<html>
<head>
    <title>Data Siswa</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">📚 Data Siswa PKL</h2>

    <!-- TOMBOL DASHBOARD + TAMBAH -->
    <div class="mb-3 d-flex gap-2">
        <a href="/dashboard" class="btn btn-secondary">
            ← Dashboard
        </a>

        <a href="/siswa/create" class="btn btn-primary">
            + Tambah Siswa
        </a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>NISN</th>
                <th>Jurusan</th>
                <th width="200px">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($data as $d)
            <tr>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->nisn }}</td>
                <td>{{ $d->jurusan }}</td>
                <td>

                    <a href="/siswa/{{ $d->id }}/edit" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="/siswa/{{ $d->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin hapus data?')">
                            Hapus
                        </button>
                    </form>

                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada data</td>
            </tr>
            @endforelse
        </tbody>

    </table>

</div>

</body>
</html>