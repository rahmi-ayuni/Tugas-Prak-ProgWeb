<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    The only way to do great work is to love what you do. - Steve Jobs
    <br><br>
    HALO SELAMAT DATANG DI HOME {{$nama}} !<br>
    Sebagai pekerja di {{$pekerjaan}}, anda harus tetap kompeten.

    <a href="http://localhost:8000/listview">Go to List View</a>
    <a href="{{ route('dashboard') }}">Go to Dashboard</a>
</div>
</body>
</html>