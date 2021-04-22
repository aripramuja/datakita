<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>datakita.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body onload="window.print();"> 
    <h1 style="text-align:center;">Laporan Mahasiswa</h1>
    <div class="box-body">
        <table class="table" aria-describedby="student">
            <thead>
                <th id="nim">NIM</th>
                <th id="name">Name</th>
                <th id="email">Email</th>
                <th id="major">Major</th>
                <th id="handphone">Handphone</th>
                <th id="address">Address</th>
            </thead>
            <tbody>
                @foreach ($student as $student)
                    <tr>
                        <td> {{ $student -> nim}}</td>
                        <td> {{ $student -> name}}</td>
                        <td> {{ $student -> email}}</td>
                        <td> {{ $student -> major}}</td>
                        <td> {{ $student -> handphone}}</td>
                        <td> {{ $student -> address}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>   
    
</body>
</html>