<!-- resources/views/printForm.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Formulir</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container px-5">
        {{-- <h1>Formulir Pendaftaran</h1> --}}
        <div class="row justify-content-center border-bottom border-gray">
            <div class="d-flex pb-3">
                <div>
                    <img src="../assets/img/logoman1.png" alt="" width="150" height="150">
                </div>
                <div class="text-center">
                    <h2>KEMENTERIAN AGAMA REPUBLIK INDONESIA</h2>
                    <h3>KANTOR KEMENTERIAN AGAMA KAB. CIREBON</h3>
                    <h4>MADRASAH ALIYAH NEGERI 1 CIREBON</h4>
                    <div>Jl. Kantor Pos No. 36 Weru - Cirebon Kode Pos 45154</div>
                    <div>Telepon/Fax. (0231) 321488</div>
                    <div>SITUS : www.man1cirebon.sch.id / E-mail : man1cirebon@gmail.com</div>
                </div>
            </div>
            <!-- Tambahkan konten lainnya sesuai kebutuhan -->
        </div>
        <!-- Konten yang ingin dicetak, pastikan untuk menggunakan variabel yang dikirim dari controller -->
        <div>
            <div class="col-md-6 mt-3 mb-3 text-center">
                <div class="fs-1">Formulir Pendaftaran Peserta Didik Baru Tahun Pelajaran 2024/2025</div>
            </div>

            {{-- bagian 1 --}}
            <div class="mb-2">
                <div class="row">
                    <div class="col-1"><strong>1.</strong></div>
                    <div class="col-11">
                        <strong>Registrasi Peserta Didik</strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-4">
                        <div>Kode Pendaftaran</div>
                        <div>Kelas/Program</div>
                        <div>Nama Sekolah Asal</div>
                        <div>NPSN Sekolah Asal</div>
                    </div>
                    <div class="col-7">
                        <div>: &nbsp;&nbsp; {{ $formulir->kode_pendaftaran }}</div>
                        <div>: &nbsp;&nbsp; {{ $formulir->kelas_program }}</div>
                        <div>: &nbsp;&nbsp; {{ $formulir->nama_sekolah_asal }}</div>
                        <div>: &nbsp;&nbsp; {{ $formulir->npsn_sekolah_asal }}</div>
                    </div>
                </div>
            </div>

            {{-- bagian 2 --}}
            <div class="mb-2">
                <div class="row">
                    <div class="col-1"><strong>2.</strong></div>
                    <div class="col-11">
                        <strong>Biodata Peserta Didik</strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-4">
                        <div>Nama Lengkap</div>
                        <div>Jenis Kelamin</div>
                        <div>NISN</div>
                        <div>NIK</div>
                        <div>Tempat Lahir</div>
                        <div>Tanggal Lahir</div>
                    </div>
                    <div class="col-7">
                        <div>: &nbsp;&nbsp; {{ $formulir->nama_lengkap }}</div>
                        <div>: &nbsp;&nbsp; {{ $formulir->jenis_kelamin }}</div>
                        <div>: &nbsp;&nbsp; {{ $formulir->nisn }}</div>
                        <div>: &nbsp;&nbsp; {{ $formulir->nik }}</div>
                        <div>: &nbsp;&nbsp; {{ $formulir->tempat_lahir }}</div>
                        <div>: &nbsp;&nbsp; {{ $formulir->tanggal_lahir }}</div>
                    </div>
                </div>
            </div>

            {{-- bagian 3 --}}
            <div class="mb-2">
                <div class="row">
                    <div class="col-1"><strong>3.</strong></div>
                    <div class="col-11">
                        <strong>Alamat Peserta Didik</strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-4">
                        <div>Alamat Jalan</div>
                        <div>RT/RW</div>
                        <div>Kelurahan/Desa</div>
                        <div>Kecamatan</div>
                        <div>Kabupaten</div>
                        <div>Provinsi</div>
                        <div>No. HP</div>
                    </div>
                    <div class="col-7">
                        <div>: &nbsp;&nbsp; {{ $formulir->alamat_jalan }}</div>
                        <div>: &nbsp;&nbsp; {{ $formulir->rt }}</div>
                        <div>: &nbsp;&nbsp; {{ $formulir->desa }}</div>
                        <div>: &nbsp;&nbsp; {{ $formulir->kecamatan }}</div>
                        <div>: &nbsp;&nbsp; {{ $formulir->kabupaten }}</div>
                        <div>: &nbsp;&nbsp; {{ $formulir->provinsi }}</div>
                        <div>: &nbsp;&nbsp; {{ $formulir->no_hp }}</div>
                    </div>
                </div>
            </div>

        </div>
        <footer>
            <p>Cetak pada: {{ \Carbon\Carbon::now()->toDateTimeString() }}</p>
        </footer>
    </div>
    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>
