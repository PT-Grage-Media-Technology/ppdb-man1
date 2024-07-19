@extends('layouts.main')
@section('title', 'Data Siswa')
@section('active_data_siswa', 'active')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Data Peserta Didik Baru</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <div class="container mt-5">
                            <h2>Export Users to Excel</h2>
                            <a href="{{ url('export-users') }}" class="btn btn-primary">Export to Excel</a>
                        </div>
                        <table class="table align-items-center mb-0 data-table">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode Pendaftaran</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nama Lengkap</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Asal Sekolah</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Jenis Kelamin</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nisn</th>
                                        <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kelengkapan Data</th>

                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @forelse ($peserta as $item)
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="{{ asset('foto_siswa/' . $item->foto) }}" class="avatar avatar-sm me-3" alt="foto">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Miriam Eric</h6>
                        <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">Programtor</p>
                    <p class="text-xs text-secondary mb-0">Developer</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                  </td>
                  <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
                @empty
                <p>Tidak ada data peserta</p>
            @endforelse --}}
                                <script type="text/javascript">
                                    $(function() {
                                        var table = $('.data-table').DataTable({
                                            processing: true,
                                            serverSide: true,
                                            ajax: "{{ route('list-peserta') }}",
                                            columns: [
                                                {
                                                    data: 'kode_pendaftaran',
                                                    name: 'kode_pendaftaran'
                                                },
                                                {
                                                    data: 'nama_lengkap',
                                                    name: 'nama_lengkap'
                                                },
                                                {
                                                    data: 'nama_sekolah_asal',
                                                    name: 'nama_sekolah_asal'
                                                },
                                                {
                                                    data: 'jenis_kelamin',
                                                    name: 'jenis_kelamin'

                                                },
                                                {
                                                    data: 'nisn',
                                                    name: 'nisn'
                                                },
                                                {
                                                    data: 'kelengkapan_data',
                                                    name: 'kelengkapan_data'
                                                },

                                                {
                                                    data: 'action',
                                                    name: 'action',
                                                    orderable: false,
                                                    searchable: false
                                                },

                                            ]
                                        });
                                    });
                                </script>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Konfirmasi -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Tindakan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin <span id="actionText"></span> peserta ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="#" id="confirmButton" class="btn btn-primary">Ya</a>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const confirmationModal = document.getElementById('confirmationModal');
        confirmationModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const action = button.getAttribute('data-action');
            const url = button.getAttribute('data-url');

            const actionText = confirmationModal.querySelector('#actionText');
            const confirmButton = confirmationModal.querySelector('#confirmButton');

            actionText.textContent = action;
            confirmButton.setAttribute('href', url);
        });
    });
</script>
 <!-- End Modal Konfirmasi -->
@endsection
