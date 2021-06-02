<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>...:EDIT DOSEN PEMBIMBING:...</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
<body>
<form action="/dosen/updated/" method="post">
    @csrf
    @method ('PUT')
    <input type="hidden" class="form-control" name="id" id="id" value="{{ Auth::guard('dosen')->user()->id }}">
    <div class="form-group">
        <label for="exampleFormControlInput1">NIK</label>
        <input type="number" class="form-control" name="nik" id="nik" value="{{ Auth::guard('dosen')->user()->nik }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nama</label>
        <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" value="{{ Auth::guard('dosen')->user()->nama_dosen }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="text" class="form-control" name="email_dosen" id="email_dosen" value="{{ Auth::guard('dosen')->user()->email_dosen }}" disabled>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nomor Telepon</label>
        <input type="number" class="form-control" name="no_telp_dosen" id="no_telp_dosen" value="{{ Auth::guard('dosen')->user()->no_telp_dosen }}">
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