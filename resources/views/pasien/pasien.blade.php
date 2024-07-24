@extends('layout.app')

@section('title')
Data Pasien
@endsection

@section('content')
<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-sm">
            <h3 class="text-primary">Tabel Pasien</h3>
        </div>
        <div class="col text-end">
            <a href="{{ route('pasiens.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-hover table-sm">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>ID Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pasiens as $pasien)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pasien->idPasien }}</td>
                        <td>{{ $pasien->namaPasien }}</td>
                        <td>{{ $pasien->jenis_kelamin }}</td>
                        <td>{{ $pasien->alamat }}</td>
                        <td>
                            <a href="{{ route('pasiens.edit', $pasien->idPasien) }}" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm delete-btn" data-id="{{ $pasien->idPasien }}">Hapus</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada pasien</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin ingin menghapus data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form id="deleteForm" method="POST" action="{{ route('pasiens.destroy', '') }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.delete-btn').click(function() {
            var id = $(this).data('id');
            $('#deleteForm').attr('action', '{{ route("pasiens.destroy", "") }}/' + id);
            $('#confirmDeleteModal').modal('show');
        });
    });
</script>
@endsection
