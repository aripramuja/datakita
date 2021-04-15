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
            <div class="insert-data">
                <h5 style="text-align:center">Edit Data</h5>
                <p style="text-align:center">E-Recrutment Form</p>
                <form action="/student/{{$data_student->id}}" method="POST" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputNIM" class="form-label">NIM</label>
                        <input type="text" name="nim" placeholder="Your NIM . . ." maxlength="10" class="form-control" id="exampleInputNIM" value="{{$data_student->nim}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" name="name" placeholder="Your Name . . ." maxlength="50" class="form-control" id="exampleInputName" aria-describedby="nameHelp" value="{{$data_student->name}}" required>
                        <div id="nameHelp" class="form-text">Write your full name</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" placeholder="Your Email . . ." class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_student->email}}" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputMajor" class="form-label">Major</label>
                        <select class="form-select" name="major" aria-label="select example" required >
                            <option value="">Major</option>
                            <option value="CS">CS</option>
                            <option value="CV">CV</option>
                            <option value="ME">ME</option>
                            <option value="CH">CH</option>
                        </select>
                        <div class="invalid-feedback">Example invalid select feedback</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputHandphone" class="form-label">No.Handphone</label>
                        <input type="text" name="handphone" placeholder="No. Phone . . ." maxlength="14" class="form-control" id="exampleInputHandphone" value="{{$data_student->handphone}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAddress" class="form-label">Address</label>
                        <input type="text" name="address" placeholder="Address . . ." maxlength="250"  class="form-control" id="exampleInputAddress" value="{{$data_student->address}}" required>
                    </div>
                    <div class="card-footer d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
</body>
</html>
