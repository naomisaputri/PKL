@extends('layouts.app')

@section('content')

<h2 class="mb-4">Dashboard</h2>
<h5>Halo, Selamat Datang 👋</h5>
<p>Semoga harimu menyenangkan!</p>

<div class="row">

    <div class="col-md-4">
        <div class="card p-3 shadow">
            <h5>Total Siswa</h5>
            <h2>{{ \App\Models\Siswa::count() }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 shadow">
            <h5>Total Perusahaan</h5>
            <h2>{{ \App\Models\Perusahaan::count() }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 shadow">
            <h5>Tanggal Hari Ini</h5>
            <h4>{{ date('d-m-Y') }}</h4>
        </div>
    </div>

</div>

@endsection