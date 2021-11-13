<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuratMenyorak | Edit Surat</title>
    <link rel="shortcut icon" href="favicon_io/favicon-32x32.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <form method="post" action="/surat/updated/{{ $srt->id }}">
        @csrf               <!-- {{ csrf_field() }} -->
        @method('PUT')      <!-- {{ method_field('PUT') }} -->
        <div class="row d-flex justify-content-center mt-5">
          <div class="col-md-3">
                  <main class="form-signin">
                    <form>
                        <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Edit Surat</h1>

                        <div class="form-floating mb-2">
                        <input type="text" class="form-control btn-black" name="tujuan_surat" id="floatingInput" value="{{ $srt->tujuan_surat }}">
                        <label for="floatingInput">Tujuan Surat</label>
                        </div>

                        <div class="form-floating mb-2">
                        <input type="text" class="form-control btn-black" name="nama_mitra" id="floatingInput" value="{{ $srt->nama_mitra }}">
                        <label for="floatingInput">Nama Mitra</label>
                        </div>

                        <div class="form-floating mb-2">
                        <input type="text" class="form-control btn-black" name="alamat_mitra" id="floatingInput" value="{{ $srt->alamat_mitra }}">
                        <label for="floatingInput">Alamat Mitra</label>
                        </div>

                        <div class="form-floating mb-2">
                        <input type="text" class="form-control btn-black" name="keterangan" id="floatingInput" value="{{ $srt->keterangan }}">
                        <label for="floatingInput">Keterangan</label>
                        </div>

                        <button class="w-100 btn btn-lg btn-success text-dark" type="submit" value="Simpan">Simpan</button>
          </div>
      </div>
    </form>
</body>
</html>
