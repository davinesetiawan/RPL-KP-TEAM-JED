<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..:TAMBAH DATA PRA KP:..</title>
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
                <a class="nav-link" href="/homemhs">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mahasiswa">Profil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pengajuan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/suratkp">Surat Pengajuan KP</a>
                <a class="dropdown-item" href="/prakp">Pra-KP</a>
                <a class="dropdown-item" href="/kp">KP</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/ujian">Ujian KP</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <blockquote class="blockquote">
        <p class="mt-3">Tambah Data Pra Kerja Praktek</p>
        <p class="mb-0">Isi form dibawah ini untuk menambah Data Pengajuan Pra Kerja Praktek</p>
    </blockquote>
<form action="/prakp/simpan" method="post" enctype='multipart/form-data'>
    @php echo csrf_field() @endphp
    <div class="form-group">
        <label for="exampleFormControlInput1">NIM</label>
        <input type="number" class="form-control" name="nim" id="nim" placeholder="{{Auth::user()->nim}}" disabled>
    </div>
    <p class="text-justify">Semester!</p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="semester" id="semester" value="Ganjil" checked>
        <label class="form-check-label" for="exampleRadios1">
            Ganjil
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="semester" id="semester" value="Genap">
        <label class="form-check-label" for="exampleRadios2">
            Genap
        </label>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Tahun KP</label>
        <input type="number" class="form-control" name="tahun_kp" id="tahun_kp" placeholder="Masukkan Tahun KP">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Tool</label>
        <input type="text" class="form-control" name="tool" id="tool" placeholder="Masukkan jenis Tool">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Spek</label>
        <input type="text" class="form-control" name="spek" id="spek" placeholder="Masukkan Spek yang anda gunakan">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nama Lembaga</label>
        <input type="text" class="form-control" name="lembaga" id="lembaga" placeholder="Masukkan Nama Lembaga">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nama Pimpinan</label>
        <input type="text" class="form-control" name="pimpinan" id="pimpinan" placeholder="Masukkan Nama Pimpinan">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Alamat Lembaga</label>
        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat lembaga">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nomor Telepon Lembaga</label>
        <input type="number" class="form-control" name="telp_lembaga" id="telp_lembaga" placeholder="Masukkan nomor telepon lembaga">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nomor Fax Lembaga</label>
        <input type="number" class="form-control" name="fax" id="fax" placeholder="Masukkan nomor fax lembaga">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Waktu Pelaksanaan</label>
        <input type="date" class="form-control" name="wkt_pel_kp" id="wkt_pel_kp" placeholder="Masukkan Waktu Pelaksanaan KP Anda">
    </div>
    <div class="form-group">
        <label for="file"> Dokumen </label>
        <div class="custom-file">
        <input type="file" class="form-control-file" id="dokumen" name="dokumen">
        <label class="form-control-file" for="file"></label>
        </div>
    </div>
    <br>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>
</form>
</div>

    <!-- <script>
    $(document).ready(function() {
        $('#date').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            });
            });
    </script> -->

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>