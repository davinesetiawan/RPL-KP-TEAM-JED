<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:..DATA DOSEN PEMBIMBING..:</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/home">KP UKDW</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/dosen">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mahasiswa">Profil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pengajuan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/pengajuanSurat">Surat Pengajuan KP</a>
                <a class="dropdown-item" href="#">Pra-KP</a>
                <a class="dropdown-item" href="#">KP</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/ujian">Ujian KP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dosen">Data Dosen Pembimbing</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <blockquote class="blockquote">
        <p class="mt-3">Data Dosen Pembimbing</p>
    </blockquote>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nomor</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">Nomor Telepon</th>
            <th scope="col">Email</th>
            </tr>
        </thead>
        @php $nomor=1; @endphp
        @foreach($dsn as $d)
        <tbody>
            <tr>
            <th scope="row">@php echo $nomor++ @endphp</th>
            <td>@php echo $d->nik @endphp</td>
            <td>@php echo $d->nama_dosen @endphp</td>
            <td>@php echo $d->no_telp_dosen @endphp</td>
            <td>@php echo $d->email_dosen @endphp</td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>