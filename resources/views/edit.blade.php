<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pasien</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.css') }}">
</head>
<body>
<div class="container">
    <div class="row mt-3">
        <div class="col-4">
            <h3>Edit Data Pasien</h3>
            <form action="{{ route('pasiens.update', $pasien->idPasien) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="idPasien">ID Pasien</label>
                    <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien" value="{{ $pasien->idPasien }}" readonly>
                </div>
                <div class="form-group">
                    <label for="namaPasien">Nama Pasien</label>
                    <input type="text" class="form-control mb-3" name="namaPasien" placeholder="Nama Pasien" value="{{ $pasien->namaPasien }}">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" {{ $pasien->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                        <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki" {{ $pasien->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>
                        <label class="form-check-label" for="jenis_kelamin">Laki-laki</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat">{{ $pasien->alamat }}</textarea>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.js') }}"></script>
</body>
</html>
