@extends('layouts.app')

@section('content')

<h2 class="mb-4">Dashboard</h2>

<div class="row">

<div class="col-md-4">
<div class="card p-3 shadow">
<h5>Total Siswa</h5>
<h2>{{ \App\Models\Siswa::count() }}</h2>
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