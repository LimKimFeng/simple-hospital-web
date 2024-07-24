<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kunjungan</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Edit Data Kunjungan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kunjungan.update', $kunjungan->idKunjungan) }}" method="POST">
                            @csrf
                            @method('PUT')

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
                                <label for="idKunjungan" class="form-label">ID Kunjungan</label>
                                <input type="text" class="form-control" name="idKunjungan" id="idKunjungan" value="{{ $kunjungan->idKunjungan }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="idPasien" class="form-label">ID Pasien</label>
                                <select name="idPasien" id="idPasien" class="form-select">
                                    <option value="" disabled>Pilih ID Pasien</option>
                                    @foreach($pasiens as $pasien)
                                    <option value="{{ $pasien->idPasien }}" {{ $kunjungan->idPasien == $pasien->idPasien ? 'selected' : '' }}>
                                        {{ $pasien->idPasien }} ({{ $pasien->namaPasien }})
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="idDokter" class="form-label">ID Dokter</label>
                                <select name="idDokter" id="idDokter" class="form-select">
                                    <option value="" disabled>Pilih ID Dokter</option>
                                    @foreach($dokters as $dokter)
                                    <option value="{{ $dokter->idDokter }}" {{ $kunjungan->idDokter == $dokter->idDokter ? 'selected' : '' }}>
                                        {{ $dokter->idDokter }} ({{ $dokter->namaDokter }})
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $kunjungan->tanggal }}">
                            </div>

                            <div class="mb-3">
                                <label for="keluhan" class="form-label">Keluhan</label>
                                <textarea name="keluhan" id="keluhan" rows="3" class="form-control">{{ $kunjungan->keluhan }}</textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
