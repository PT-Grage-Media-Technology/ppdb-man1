@extends('layouts.main')
@section('title', 'Jurusan')
@section('active_jurusan', 'active')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Data Jurusan</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="container mt-5">
                        <a href="#" class="btn-action" data-action="Tambah" data-bs-toggle="modal" data-bs-target="#tambahModal">
                            <span class="btn btn-success">Tambah</span>
                        </a>
                    </div>
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0 data-table">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">Nama Jurusan</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($jurusan as $item)
                                    <tr>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $item->nama_jurusan }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="#" class="btn-action" data-action="edit" data-bs-toggle="modal" data-bs-target="#editModal{{$item->id}}">
                                                <span class="btn btn-sm btn-warning">Edit</span>
                                            </a>
                                            <a href="#" class="btn-action" data-action="hapus" data-bs-toggle="modal" data-bs-target="#hapusModal{{$item->id}}">
                                                <span class="btn btn-sm btn-danger">Hapus</span>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel">Edit Data Jurusan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('jurusan-edit', ['id' => $item->id]) }}">
                                                        @csrf <!-- Include CSRF token for security, if using Laravel -->
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="nama_jurusan">Nama Jurusan:</label>
                                                                <input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan" value="{{ $item->nama_jurusan }}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Confirm</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal Edit -->

                                    <!-- Modal Hapus -->
                                    <div class="modal fade" id="hapusModal{{$item->id}}" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hapusModalLabel">Hapus Data Jurusan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin ingin menghapus data jurusan ini?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <form method="POST" action="{{ route('jurusan-hapus', ['id' => $item->id]) }}">
                                                        @csrf <!-- Include CSRF token for security, if using Laravel -->
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal Hapus -->

                                @empty
                                    <tr>
                                        <td colspan="2" class="text-center">
                                            <p>Tidak ada data peserta</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Tambah Data Jurusan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('jurusan-tambah') }}">
                        @csrf <!-- Include CSRF token for security, if using Laravel -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nama_jurusan">Nama Jurusan:</label>
                                <input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Tambah -->
@endsection
