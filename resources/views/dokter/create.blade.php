<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dokter</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.css') }}">
</head>

<body>
    <div class="container ">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data Dokter</h3>
                <form action="{{ route('dokter.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="idDokter">ID Dokter</label>
                        <input type="text" class="form-control mb-3" name="idDokter" placeholder="ID Dokter">
                    </div>
                    <div class="form-group">
                        <label for="namaDokter">Nama Dokter</label>
                        <input type="text" class="form-control mb-3" name="namaDokter" placeholder="Nama Dokter">
                    </div>
                    <!-- spesialis -->
                    <div class="form-group">
                        <label for="spesialis">Spesialis</label>
                        <select class="form-control" name="spesialis" id="spesialis">
                            <option value="" disabled selected>Pilih Spesialisasi</option>
                            @foreach ($spesialisasi_dokter as $spesialis)
                                <option value="{{ $spesialis }}">{{ $spesialis }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="nomorTelepon">Nomor Telepon</label>
                        <input type="text" class="form-control mb-3" name="nomorTelepon" placeholder="Nomor Telepon">
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
