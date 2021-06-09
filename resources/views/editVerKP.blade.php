<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..:VERIFIKASI KP:..</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/homedsn">KP UKDW</a>
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
        <p class="mt-3">Verifikasi Kerja Praktek</p>
    </blockquote>
<form action="/verkp/updated/" method="post">
    @csrf
    @method ('PUT')
    <input type="hidden" class="form-control" name="id_kp" id="id_kp=" value="{{ $kp->id_kp }}">
    <div class="form-group">
        <label for="exampleFormControlInput1">NIM</label>
        <input type="number" class="form-control" name="nim" id="nim" value="{{ $kp->nim }}" disabled>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="semester" id="semester" value="Ganjil" @php if (($kp->semester)=='Ganjil') echo 'checked' @endphp disabled>
        <label class="form-check-label" for="exampleRadios1">
            Ganjil
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="semester" id="semester" value="Genap" @php if (($kp->semester)=='Genap') echo 'checked' @endphp disabled>
        <label class="form-check-label" for="exampleRadios2">
            Genap
        </label>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nomor Telepon Lembaga</label>
        <input type="number" class="form-control" name="telp_lembaga" id="telp_lembaga" value="{{ $kp->telp_lembaga }}" disabled>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Alamat Lembaga</label>
        <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $kp->alamat }}" disabled>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nama Lembaga</label>
        <input type="text" class="form-control" name="lembaga" id="lembaga" value="{{ $kp->lembaga }}" disabled>
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Dokumen</label>
    <input type="file" class="form-control-file" name="dokumen" id="dokumen" disabled>
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Nama Pimpinan</label>
        <input type="text" class="form-control" name="pimpinan" id="pimpinan" value="{{ $kp->pimpinan }}" disabled>
    </div>
    <div class="form-group">
        <label> Verifikasi </label>
        <select name ="status_kp" class="custom-select">
        <option value="1">Diterima</option>
        <option value="2">Ditolak</option>
        </select>
    </div>
    <br>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>
</form>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>