@extends('layouts.main')
@section('title', 'Formulir Pendaftaran')
@section('active_formulir_pendaftaran', 'active')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Formulir Pendaftaran Peserta Didik Baru</p>
                        {{-- <p class="mb-0 ms-3">Kelengkapan: {{ $completionPercentage }}%</p> --}}

                        @if ($completionPercentage == 100)
                            {{-- <a href="#" class="btn btn-success btn-sm ms-auto"><i class="fa fa-print"></i> Cetak Formulir</a> --}}
                            <button class="btn btn-success btn-sm ms-auto" onclick="openPrintPage()">Cetak Formulir</button>
                        @else
                            <button class="btn btn-secondary btn-sm ms-auto" disabled><i class="fa fa-print"></i> Cetak
                                Formulir</button>
                        @endif

                    </div>
                </div>
                <div class="container text-center">
                    <span class="badge badge-sm bg-gradient-danger text-center">Kelengkapan Data :
                        {{ $completionPercentage }}%</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('formulir-pendaftaran-post') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user_id }}">
                        <p class="text-uppercase text-sm">Registrasi Peserta Didik</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kode Pendaftaran</label>
                                    <input class="form-control" type="text" name="kode_pendaftaran"
                                        value="{{ $formulir->kode_pendaftaran }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kelas/Program</label>
                                    <input class="form-control" type="text" name="kelas_program"
                                        value="{{ $formulir->kelas_program }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Sekolah Asal</label>
                                    <input class="form-control" type="text" name="nama_sekolah_asal"
                                        value="{{ $formulir->nama_sekolah_asal }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">NPSN Sekolah Asal</label>
                                    <input class="form-control" type="number" name="npsn_sekolah_asal"
                                        value="{{ $formulir->npsn_sekolah_asal }}">
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Biodata Peserta Didik</p>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="nama_lengkap"
                                        value="{{ $formulir->nama_lengkap }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
                                    <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                        <option value="{{ $formulir->jenis_kelamin }}" selected>
                                            {{ $formulir->jenis_kelamin }}</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">NIK</label>
                                    <input class="form-control" type="text" name="nik" value="{{ $formulir->nik }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">NISN</label>
                                    <input class="form-control" type="text" name="nisn"
                                        value="{{ $formulir->nisn }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat_lahir"
                                        value="{{ $formulir->tempat_lahir }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="tanggal_lahir"
                                        value="{{ $formulir->tanggal_lahir }}">
                                </div>
                            </div>
                        </div>
                        {{-- preview foto --}}
                        <img alt="belum ada foto!" class="mb-3" id="currentImage"
                            style="width: 80px; height: 100px; border-radius: 10px; object-fit: cover; margin-left: 100px;"
                            src="{{ asset('foto_siswa/' . $formulir->foto) }}">
                        {{-- priview real time --}}
                        <img id="newImage" src="#" alt="Preview"
                            style="display: none; width: 100px; height: 150px; border-radius: 10px; object-fit: cover; margin-left: 100px; ">
                        <div class="col-md-4">

                            <label for="example-text-input" class="form-control-label">Foto 3x4 Merah</label>
                            <input class="form-control" type="file" id="foto" name="foto"
                                onchange="previewImage(this)">
                        </div>

                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Alamat Peserta Didik</p>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Alamat Jalan</label>
                                    <input class="form-control" type="text" name="alamat_jalan"
                                        value="{{ $formulir->alamat_jalan }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">RT/RW</label>
                                    <input class="form-control" type="text" name="rt"
                                        value="{{ $formulir->rt }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Desa/Kelurahan</label>
                                    <input class="form-control" type="text" name="desa"
                                        value="{{ $formulir->desa }}"">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kecamatan</label>
                                    <input class="form-control" type="text" name="kecamatan"
                                        value="{{ $formulir->kecamatan }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kabupaten</label>
                                    <input class="form-control" type="text" name="kabupaten"
                                        value="{{ $formulir->kabupaten }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Provinsi</label>
                                    <input class="form-control" type="text" name="provinsi"
                                        value="{{ $formulir->provinsi }}">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No. HP</label>
                                    <input class="form-control" type="number" name="no_hp"
                                        value="{{ $formulir->no_hp }}">
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Data Orang Tua Ayah</p>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Status Ayah</label>
                                    <select class="form-select" name="status_ayah" aria-label="Default select example">
                                        <option value="{{ $formulir->status_ayah }}" selected>
                                            {{ $formulir->status_ayah }}</option>
                                        <option value="Hidup">Hidup</option>
                                        <option value="Meninggal">Meninggal</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">NIK Ayah</label>
                                    <input class="form-control" type="number" name="nik_ayah"
                                        value="{{ $formulir->nik_ayah }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Ayah</label>
                                    <input class="form-control" type="text" name="nama_ayah"
                                        value="{{ $formulir->nama_ayah }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tanggal Lahir Ayah</label>
                                    <input class="form-control" type="date" name="tanggal_lahir_ayah"
                                        value="{{ $formulir->tanggal_lahir_ayah }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Pekerjaan Ayah</label>
                                    <select class="form-select" name="pekerjaan_ayah"
                                        aria-label="Default select example">
                                        <option value="{{ $formulir->pekerjaan_ayah }}" selected>
                                            {{ $formulir->pekerjaan_ayah }}</option>
                                        <option value="PNS">PNS</option>
                                        <option value="TNI">TNI</option>
                                        <option value="Polri">Polri</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Buruh(Tani/Pabrik/Bangunan)">Buruh(Tani/Pabrik/Bangunan)</option>
                                        <option value="Lainnya">Lainnya</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Pendidikan Ayah</label>
                                    <select class="form-select" name="pendidikan_ayah"
                                        aria-label="Default select example">
                                        <option value="{{ $formulir->pendidikan_ayah }}" selected>
                                            {{ $formulir->pendidikan_ayah }}</option>
                                        <option value="SD/Sederajat">SD/Sederajat</option>
                                        <option value="SMP/Sederajat">SMP/Sederajat</option>
                                        <option value="SMA/Sederajat">SMA/Sederajat</option>
                                        <option value="D1">D1</option>
                                        <option value="D2">D2</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                        <option value="Lainnya">Lainnya</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Penghasilan Ayah</label>
                                    <select class="form-select" name="penghasilan_ayah"
                                        aria-label="Default select example">
                                        <option value="{{ $formulir->penghasilan_ayah }}" selected>
                                            {{ $formulir->penghasilan_ayah }}</option>
                                        <option value="1.000.000-2.000.000">1.000.000-2.000.000</option>
                                        <option value="2.000.000-3.000.000">2.000.000-3.000.000</option>
                                        <option value=">3.000.000">>3.000.000</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No Hp Ayah</label>
                                    <input class="form-control" type="number" name="no_hp_ayah"
                                        value="{{ $formulir->no_hp_ayah }}">
                                </div>
                            </div>



                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Data Orang Tua Ibu</p>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Status Ibu</label>
                                    <select class="form-select" name="status_ibu" aria-label="Default select example">
                                        <option value="{{ $formulir->status_ibu }}" selected>{{ $formulir->status_ibu }}
                                        </option>
                                        <option value="Hidup">Hidup</option>
                                        <option value="Meninggal">Meninggal</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">NIK Ibu</label>
                                    <input class="form-control" type="number" name="nik_ibu"
                                        value="{{ $formulir->nik_ibu }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Ibu</label>
                                    <input class="form-control" type="text" name="nama_ibu"
                                        value="{{ $formulir->nama_ibu }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tanggal Lahir Ibu</label>
                                    <input class="form-control" type="date" name="tanggal_lahir_ibu"
                                        value="{{ $formulir->tanggal_lahir_ibu }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Pekerjaan Ibu</label>
                                    <select class="form-select" name="pekerjaan_ibu" aria-label="Default select example">
                                        <option value="{{ $formulir->pekerjaan_ibu }}" selected>
                                            {{ $formulir->pekerjaan_ibu }}</option>
                                        <option value="PNS">PNS</option>
                                        <option value="TNI">TNI</option>
                                        <option value="Polri">Polri</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Buruh(Tani/Pabrik/Bangunan)">Buruh(Tani/Pabrik/Bangunan)</option>
                                        <option value="Lainnya">Lainnya</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Pendidikan Ibu</label>
                                    <select class="form-select" name="pendidikan_ibu"
                                        aria-label="Default select example">
                                        <option value="{{ $formulir->pendidikan_ibu }}" selected>
                                            {{ $formulir->pendidikan_ibu }}</option>
                                        <option value="SD/Sederajat">SD/Sederajat</option>
                                        <option value="SMP/Sederajat">SMP/Sederajat</option>
                                        <option value="SMA/Sederajat">SMA/Sederajat</option>
                                        <option value="D1">D1</option>
                                        <option value="D2">D2</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                        <option value="Lainnya">Lainnya</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Penghasilan Ibu</label>
                                    <select class="form-select" name="penghasilan_ibu"
                                        aria-label="Default select example">
                                        <option value="{{ $formulir->penghasilan_ibu }}" selected>
                                            {{ $formulir->penghasilan_ibu }}</option>
                                        <option value="1.000.000-2.000.000">1.000.000-2.000.000</option>
                                        <option value="2.000.000-3.000.000">2.000.000-3.000.000</option>
                                        <option value=">3.000.000">>3.000.000</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No Hp Ibu</label>
                                    <input class="form-control" type="number" name="no_hp_ibu"
                                        value="{{ $formulir->no_hp_ibu }}">
                                </div>
                            </div>


                            <button type="submit" class="btn btn-success btn-sm ms-auto"><i class="fa fa-save"></i>
                                Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="pengumumanModal" tabindex="-1" aria-labelledby="pengumumanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary">
                    <h5 class="modal-title text-white" id="pengumumanModalLabel"><i class="fa fa-flag"></i> Hasil
                        Pengumuman</h5>
                    <button type="button" class="close badge badge-sm bg-gradient-danger text-center"
                        data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <p class="text-white text-start text-sm mb-0">Jadwal PPDB Gelombang 2</p>
                                    <p class="text-white text-start text-sm mb-0">Pendaftaran : 16 April 2024 s.d. 29 Juni
                                        2024 , Pengumuman : 01 Juli 2024</p>
                                    <p class="text-white text-start text-sm mb-0">Daftar Ulang : 01 Juli 2024 s.d. 05 Juli
                                        2024</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-center">
                                        <img src="{{ asset('settings/' . $setting->logo_sekolah) }}" alt="Logo Sekolah"
                                            width="100">
                                    </p>
                                    <h5 class="text-center">Pengumuman Hasil Pendaftaran</h5>

                                    <div class="text-center">
                                        <p id="togglePdf" class="badge badge-sm bg-gradient-primary"
                                            style="cursor: pointer;">klik di sini</p>
                                    </div>
                                    @if ($setting->is_pengumuman == '0')
                                        <div id="pdfContainer" class="text-center mt-4 bg-gradient-danger"
                                            style="display: none">
                                            <h5 class="text-center text-white">MENUNGGU PENGUMUMAN</h5>
                                        </div>
                                    @else
                                        {{-- Tampilkan PDF jika pengumuman == 'Diterima' --}}
                                        @if ($formulir->pengumuman == 'Diterima')
                                            <div id="pdfContainer" class="text-center mt-4" style="display: none">
                                                <embed src="{{ asset('pdf/' . $formulir->pdf_diterima) }}"
                                                    type="application/pdf" width="100%" height="600px" />
                                            </div>

                                            {{-- Tampilkan pesan jika pengumuman == 'Ditolak' --}}
                                        @elseif ($formulir->pengumuman == 'Ditolak')
                                            <div id="pdfContainer" class="text-center mt-4 bg-gradient-danger"
                                                style="display: none">
                                                <h5 class="text-center text-white">MAAF ANDA TIDAK DITERIMA</h5>
                                            </div>
                                            {{-- Tampilkan pesan jika pengumuman == 'Ditolak' --}}
                                        @elseif ($formulir->pengumuman == 'Menunggu')
                                            <div id="pdfContainer" class="text-center mt-4 bg-gradient-danger"
                                                style="display: none">
                                                <h5 class="text-center text-white">MENUNGGU PENGUMUMAN</h5>
                                            </div>
                                        @endif


                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- js modal --}}
    <script>
        $(document).ready(function() {
            $('#togglePdf').click(function() {
                $('#pdfContainer').slideToggle();
            });
        });
    </script>

    @if (session('status'))
        <script type="text/javascript">
            $(document).ready(function() {
                localStorage.setItem('showModal', 'true');
                $('#pengumumanModal').modal('show');
            });
        </script>
    @endif

    <script type="text/javascript">
        $(document).ready(function() {
            if (localStorage.getItem('showModal') === 'true') {
                $('#pengumumanModal').modal('show');
            }
        });
    </script>

    {{-- js cetak --}}
    <script>
        function openPrintPage() {
            var url = '/print-form?kode_pendaftaran={{ $formulir->kode_pendaftaran }}';
            window.location.href = url;
        }
    </script>


    {{-- js upload foto --}}
    <script>
        function previewImage(input) {
            var currentImage = document.getElementById('currentImage');
            var newImage = document.getElementById('newImage');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    newImage.style.display = 'block';
                    newImage.src = e.target.result;
                    newImage.style.width = '70px';
                    newImage.style.height = '70px';
                    currentImage.style.display = 'none';
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                newImage.style.display = 'none';
                newImage.src = '#';
                currentImage.style.display = 'block';
            }
        }
    </script>
@endsection
