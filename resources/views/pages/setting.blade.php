@extends('layouts.main')
@section('title', 'Formulir Pendaftaran')
@section('active_setting', 'active')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Edit Setting Web</p>
                    </div>
                </div>

                <div class="container">
                    <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahun Ajaran</label>
                                    <input class="form-control" type="text" name="tahun_ajaran" value="<?php echo htmlspecialchars($setting->tahun_ajaran); ?>"  placeholder="e.g. 2021/2022">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Munculkan Notifikasi Pengumuman</label>
                                    <select class="form-control" name="is_pengumuman">
                                        <option value="0" <?php echo ($setting->is_pengumuman == 0) ? 'selected' : ''; ?>>Tidak</option>
                                        <option value="1" <?php echo ($setting->is_pengumuman == 1) ? 'selected' : ''; ?>>Ya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tanggal Pengumuman</label>
                                    <input class="form-control" type="date" name="tgl_pengumuman" value="<?php echo htmlspecialchars($setting->tgl_pengumuman); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Jadwal PPDB</label>
                                    <input class="form-control" type="text" name="jadwal_ppdb" value="<?php echo htmlspecialchars($setting->jadwal_ppdb); ?>" placeholder="e.g. Gelombang 3">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tanggal Pendaftaran Mulai</label>
                                    <input class="form-control" type="date" name="tgl_pendaftaran_mulai" value="<?php echo htmlspecialchars($setting->tgl_pendaftaran_mulai); ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tanggal Pendaftaran Selesai</label>
                                    <input class="form-control" type="date" name="tgl_pendaftaran_selesai" value="<?php echo htmlspecialchars($setting->tgl_pendaftaran_selesai); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tanggal Daftar Ulang Mulai</label>
                                    <input class="form-control" type="date" name="tgl_daftar_ulang_mulai" value="<?php echo htmlspecialchars($setting->tgl_daftar_ulang_mulai); ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tanggal Daftar Ulang Selesai</label>
                                    <input class="form-control" type="date" name="tgl_daftar_ulang_selesai" value="<?php echo htmlspecialchars($setting->tgl_daftar_ulang_selesai); ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Sekolah</label>
                                    <input class="form-control" type="text" name="nama_sekolah" value="<?php echo htmlspecialchars($setting->nama_sekolah); ?>" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                {{-- preview foto --}}
                                <label class="form-control-label" for="">Tanda Tangan Ketua PPDB</label>
                                <div>
                                    <img alt="belum ada foto!" class="mb-3" id="currentImage"
                                    style="width: 80px; height: 100px; border-radius: 10px; object-fit: cover; margin-left: 100px;"
                                    src="{{ asset('settings/' . $setting->ttd_ketua_ppdb) }}">
                                    {{-- priview real time --}}
                                    <img id="newImage" src="#" alt="Preview"
                                        style="display: none; width: 100px; height: 150px; border-radius: 10px; object-fit: cover; margin-left: 100px; ">
                                </div>

                                <div>
                                    <input class="form-control" type="file" id="ttd_ketua_ppdb" name="ttd_ketua_ppdb"
                                        onchange="previewImage(this)">
                                </div>
                            </div>

                            <div class="col-md-4">
                                {{-- preview foto --}}
                                <label class="form-control-label" for="">Logo Sekolah</label>
                                <div>
                                    <img alt="belum ada foto!" class="mb-3" id="currentImageLogo"
                                    style="width: 80px; height: 100px; border-radius: 10px; object-fit: cover; margin-left: 100px;"
                                    src="{{ asset('settings/' . $setting->logo_sekolah) }}">
                                    {{-- priview real time --}}
                                    <img id="newImageLogo" src="#" alt="Preview"
                                        style="display: none; width: 100px; height: 150px; border-radius: 10px; object-fit: cover; margin-left: 100px; ">
                                </div>

                                <div>
                                    <input class="form-control" type="file" id="logo_sekolah" name="logo_sekolah"
                                        onchange="previewImageLogo(this)">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <button type="submit" class="btn btn-success btn-sm ms-auto col-md-12"><i class="fa fa-save"></i>
                                Simpan Data
                            </button>
                        </div>
                    </form>
                </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

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

        function previewImageLogo(input) {
            var currentImage = document.getElementById('currentImageLogo');
            var newImage = document.getElementById('newImageLogo');

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
