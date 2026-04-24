<!DOCTYPE html>
<html>
<head>
<title>Aplikasi PKL</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
margin:0;
background:#f4f6f9;
}

.sidebar{
width:220px;
height:100vh;
background:#0d1b2a;
position:fixed;
padding:20px;
color:white;
}

.sidebar a{
display:block;
color:white;
text-decoration:none;
padding:10px;
margin-bottom:10px;
border-radius:5px;
}

.sidebar a:hover{
background:#1b263b;
}

.content{
margin-left:240px;
padding:30px;
}
</style>

</head>
<body>

<div class="sidebar">
<h3 class="mb-4 text-danger">PKL APP</h3>

<a href="/dashboard">Dashboard</a>
<a href="/siswa">Siswa</a>

<form method="POST" action="{{ route('logout') }}">
@csrf
<button class="btn btn-danger w-100">Logout</button>
</form>

</div>

<div class="content">
@yield('content')
</div>

</body>
</html>