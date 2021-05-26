<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>...:EDIT MAHASISWA:...</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
<body>
<form action="/mahasiswa/updated/" method="post">
    @csrf
    @method ('PUT')
    <input type="hidden" class="form-control" name="id" id="id" value="{{ Auth::user()->id }}">
    <div class="form-group">
        <label for="exampleFormControlInput1">NIM</label>
        <input type="number" class="form-control" name="nim" id="nim" value="{{Auth::user()->nim}}" disabled>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nama</label>
        <input type="text" class="form-control" name="nama_mhs" id="nama_mhs" value="{{ Auth::user()->nama_mhs }}">
    </div>
    <p class="text-justify">Jenis Kelamin:</p>
    <div class="form-group">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" @php if ((Auth::user()->jenis_kelamin)=='Laki-Laki') echo 'checked' @endphp>
        <label class="form-check-label" for="exampleRadios1">
            Laki-Laki
        </label>
    </div>
    <div class="form-group">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan"@php if ((Auth::user()->jenis_kelamin)=='Perempuan') echo 'checked' @endphp>
        <label class="form-check-label" for="exampleRadios1">
            Perempuan
        </label>
        </div>
        <!-- <label for="exampleFormControlInput1">Jenis Kelamin</label>
        <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="{{ Auth::user()->jenis_kelamin }}">
    </div> -->
    <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="text" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}" disabled>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nomot Telepon</label>
        <input type="number" class="form-control" name="no_telp_mhs" id="no_telp_mhs" value="{{ Auth::user()->no_telp_mhs }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">SKS</label>
        <input type="number" class="form-control" name="sks" id="sks" value="{{ Auth::user()->sks }}">
    </div>
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