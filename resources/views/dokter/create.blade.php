<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dokter</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Tambah Data Dokter</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dokter.store') }}" method="POST">
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
                                <label for="idDokter" class="form-label">ID Dokter</label>
                                <input type="text" class="form-control" name="idDokter" placeholder="ID Dokter" required>
                            </div>
                            <div class="mb-3">
                                <label for="namaDokter" class="form-label">Nama Dokter</label>
                                <input type="text" class="form-control" name="namaDokter" placeholder="Nama Dokter" required>
                            </div>
                            <div class="mb-3">
                                <label for="spesialis" class="form-label">Spesialis</label>
                                <select class="form-select" name="spesialis" id="spesialis" required>
                                    <option value="" disabled selected>Pilih Spesialisasi</option>
                                    @foreach ($spesialisasi_dokter as $spesialis)
                                    <option value="{{ $spesialis }}">{{ $spesialis }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nomorTelepon" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" name="nomorTelepon" placeholder="Nomor Telepon" required>
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
