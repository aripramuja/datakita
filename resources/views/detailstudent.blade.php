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
    <div class="card" style="width: 30rem;">
        <div class="card-body">
            <h5 class="card-title">{{$data_student-> name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$data_student-> nim}}</h6>
            <p class="card-text">{{$data_student-> email}}</p>
            <p class="card-text">{{$data_student-> major}}</p>
            <p class="card-text">{{$data_student-> handphone}}</p>
            <p class="card-text">{{$data_student-> address}}</p>
            <a href="{{$data_student->id}}/edit" class="btn btn-primary">Edit</a>
            <form action="{{$data_student->id}}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="/student" class="btn btn-primary">Back</a>
        </div>
    </div>
</body>
</html>