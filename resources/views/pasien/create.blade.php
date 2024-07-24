<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pasien</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Tambah Data Pasien</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pasiens.store') }}" method="POST">
                            @csrf

                            @if($errors->has('failed'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first('failed') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            <div class="mb-3">
                                <label for="idPasien" class="form-label">ID Pasien</label>
                                <input type="text" class="form-control" name="idPasien" id="idPasien" placeholder="ID Pasien" required>
                            </div>
                            <div class="mb-3">
                                <label for="namaPasien" class="form-label">Nama Pasien</label>
                                <input type="text" class="form-control" name="namaPasien" id="namaPasien" placeholder="Nama Pasien" required>
                            </div>
                            <fieldset class="mb-3">
                                <legend class="col-form-label">Jenis Kelamin</legend>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin_perempuan" value="Perempuan" required>
                                    <label class="form-check-label" for="jenis_kelamin_perempuan">Perempuan</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin_laki" value="Laki-laki" required>
                                    <label class="form-check-label" for="jenis_kelamin_laki">Laki-laki</label>
                                </div>
                            </fieldset>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="Alamat" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
