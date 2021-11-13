<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuratMenyorak | Buat Surat</title>
    <link rel="shortcut icon" href="favicon_io/favicon-32x32.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <form action="/surat/simpan" method="POST">
        @csrf
        <div class="row d-flex justify-content-center mt-5">
          <div class="col-md-3">
                  <main class="form-signin">
                    <form>
                        <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Buat Surat</h1>

                        <div class="form-floating mb-2">
                        <input type="text" class="form-control btn-black" name="tujuan_surat" id="floatingInput">
                        <label for="floatingInput">Tujuan Surat</label>
                        </div>

                        <div class="form-floating mb-2">
                        <input type="text" class="form-control btn-black" name="nama_mitra" id="floatingInput">
                        <label for="floatingInput">Nama Mitra</label>
                        </div>

                        <div class="form-floating mb-2">
                        <input type="text" class="form-control btn-black" name="alamat_mitra" id="floatingInput">
                        <label for="floatingInput">Alamat Mitra</label>
                        </div>

                        <div class="form-floating mb-2">
                        <input type="text" class="form-control btn-black" name="keterangan" id="floatingInput">
                        <label for="floatingInput">Keterangan</label>
                        </div>

                        <div class="dropdown mb-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Pilih Surat
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="/surat/tambahtugas">Surat Tugas</a></li>
                            <li><a class="dropdown-item" href="/surat/tambahpersonalia">Surat Personalia</a></li>
                            <li><a class="dropdown-item" href="/surat/tambahketerangan">Surat Keterangan</a></li>
                        </ul>
                        </div>

                        <button class="w-100 btn btn-lg btn-primary btn-success text-dark" type="submit" value="Simpan">Kirim</button>
          </div>
      </div>
    </form>
</body>
</html>
