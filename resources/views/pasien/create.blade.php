<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pasien</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.css') }}">

</head>

<body >
    <div class="container ">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data Pasien</h3>
                <form action="{{ route('pasiens.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="idPasien">ID Pasien</label>
                        <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien">
                    </div>
                    <div class="form-group">
                        <label for="namaPasien">Nama Pasien</label>
                        <input type="text" class="form-control mb-3" name="namaPasien" placeholder="Nama Pasien">
                    </div>
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki">Laki-laki
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>