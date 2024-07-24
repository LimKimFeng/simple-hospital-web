@extends('layout.app')

@section('title')
Data Dokter
@endsection

@section('content')
<div class="row mt-3">
    <div class="col-sm">
        <h3>Tabel Dokter</h3>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="{{ route('dokter.create') }}" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <table class="table table-striped table-hover table-sm">
            <tr>
                <th>No</th>
                <th>ID Dokter</th>
                <th>Nama Dokter</th>
                <th>Spesialis</th>
                <th>Nomor Telepon</th>
                <th>Action</th>
            </tr>
            @forelse($dokter as $dokter)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dokter->idDokter }}</td>
                <td>{{ $dokter->namaDokter }}</td>
                <td>{{ $dokter->spesialis }}</td>
                <td>{{ $dokter->nomorTelepon }}</td>
                <td>
                    <a href="{{ route('dokter.edit', $dokter->idDokter) }}" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm delete-btn" data-id="{{ $dokter->idDokter }}">Hapus</button>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Tidak ada dokter</td>
            </tr>
            @endforelse
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
                <form id="deleteForm" method="POST" action="{{ route('dokter.destroy', '') }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
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