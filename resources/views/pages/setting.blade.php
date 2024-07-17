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
                    <form action="{{ route('settings.update') }}" method="POST">
                        @csrf
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Tahun Ajaran</label>
                                <input class="form-control" type="text" name="tahun_ajaran" value="<?php echo htmlspecialchars($setting->tahun_ajaran); ?>">
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
                        <button type="submit" class="btn btn-success btn-sm ms-auto"><i class="fa fa-save"></i>
                            Simpan Data
                        </button>
                    </form>
                </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
