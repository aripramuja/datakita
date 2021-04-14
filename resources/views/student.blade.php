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
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">datakita.com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link"  href="/home">Home</a>
            <a class="nav-link active" aria-current="page"  href="/student">Student</a>
            <a class="nav-link" href="/help">Help</a>
        </div>
        </div>
    </div>
    </nav>
    <h1 style="text-align:center;">Welcome to student Data Management</h1>
    <div class="box-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="/student/insert">Insert</a>
            <button class="btn btn-primary" type="button">Cetak</button>
        </div>
        <table class="table table-hover">
            <thead>
                <th>NIM</th>
                <th>Name</th>
                <th>Email</th>
                <th>Major</th>
                <th>Handphone</th>
                <th>Address</th>
                <th>Action</th>
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
                        <td>
                            <a href="/student/{{ $student->id }}" class="badge bg-info text-dark">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>   
</body>
</html>