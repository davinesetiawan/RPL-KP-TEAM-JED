<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..:PERIODE-KP:..</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">KP UKDW</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/homedsn">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dosen">Profil</a>
            </li>
            </ul>
        </div>
        </nav>

<blockquote class="blockquote">
        <p class="mt-3">Periode Kerja Praktek</p>
    </blockquote>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"> <strong> Periode </strong> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                            </ul>
                            </div>
                    @endif

                    @if(\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{\Session::get('success')}}</p>
                        </div>
                    @endif

                    <div class="container">
                    <form method="post" action="/periode/tambah">
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"> 
                    <div class="form-group">
                        <select class="custom-select" name="semester" required>
                        <option value="">Pilih Periode</option>
                        <option value="1">Ganjil</option>
                        <option value="2">Genap</option>
                    </select>
                    <div class="invalid-feedback"></div>
                    </div>
                    
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Tahun </label>
                                <input type="text" class="form-control" name="tahun" placeholder="Ex.2020">
                            </div>
                    
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                
                </div><br>
                <button class="btn btn-success"> <a style="color:white;text-decoration: none;" href="/homedsn"> BACK </a> </button>
            </div> 

    <div class="col-md-6">
    <div class="card">
    <div class="card-header"> <strong> Periode </strong> </div>
    <div class="card-body">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nomor</th>
            <th scope="col">Semester</th>
            <th scope="col">Tahun</th>
            <th scope="col">Status</th>
            </tr>
        </thead>
        @php $nomor=1; @endphp
        @foreach($periode as $per)
        <tbody>
            <tr>
            <th scope="row">@php echo $nomor++ @endphp</th>
            @if(
                $per['semester']== 1
            ) 
            <td>Ganjil</td>
            @elseif (
                $per['semester']== 2
            )
            <td>Genap</td>
            @endif
            <td>@php echo $per['tahun'] @endphp</td>
            @if(
                $per['status']== 1
            ) 
            <td>Aktif</td>
            @elseif (
                $per['status']== 0
            )
            <td>Non-Aktif</td>
            @endif
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>
    </div>
    </div>

    
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>