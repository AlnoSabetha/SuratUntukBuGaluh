<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuratMenyorak | Surat Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <h1 align="center">Daftar Surat e Mbokmu</h1>
    <div class="container ">
    <table class="table table-hover">
        <thead>
            <a href="/surat/tambahpersonalia" class="btn btn-lg btn-primary ml-2">[+] Buat Surat</a>
            <tr>
                <th>No Surat</th>
                <th>Tujuan Surat</th>
                <th>Nama Mitra</th>
                <th>Alamat Mitra</th>
                <th>Tanggal Dibuat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($srt as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->tujuan_surat }}</td>
                <td>{{ $s->nama_mitra }}</td>
                <td>{{ $s->alamat_mitra }}</td>
                <td>{{ $s->created_at }}</td>
                <td><a href="/surat/edit/{{$s->id}}" class="btn btn-warning">Edit</a>
                <a href="/surat/hapus/{{$s->id}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>
