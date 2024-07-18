<!DOCTYPE html>
<html>

<head>
    <title>PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .label {
            font-weight: bold;
        }
        .container {
            border: 1px solid #000;
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
            max-width: 600px; /* Sesuaikan lebar maksimum sesuai kebutuhan */
        }
        .logo {
            vertical-align: top;
            padding-right: 10px;
        }
        .logo img {
            width: 100px;
            height: 100px;
        }
        .description {
            text-align: center;
            vertical-align: middle;
        }
        .description table {
            width: 100%;
        }
        .description .link-underline-primary {
            text-decoration: underline;
            color: blue;
            font-size: 0.75rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <table>
            <tr>
                <td class="logo">
                    <img src="{{ public_path('assets/img/logoman1.png') }}" alt="Logo">
                </td>
                <td class="description">
                    <div>
                        <h6>KEMENTERIAN AGAMA REPUBLIK INDONESIA</h6>
                        <h6>KANTOR KEMENTERIAN AGAMA KAB. CIREBON</h6>
                        <h6>MADRASAH ALIYAH NEGERI 1 CIREBON</h6>
                        <div style="font-size: 0.75rem">Jl. Kantor Pos No. 36 Weru - Cirebon Kode Pos 45154</div>
                        <div style="font-size: 0.75rem">Telepon/Fax. (0231) 321488</div>
                        <div style="font-size: 0.75rem">
                            SITUS :
                            <span class="link-underline-primary">www.man1cirebon.sch.id</span>
                            |
                            E-mail :
                            <span class="link-underline-primary">man1cirebon@gmail.com</span>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div>
        <div class="text-center">
            <h6>PENGUMUMAN HASIL SELEKSI PPDB</h6>
            <h6>MADRASAH ALIYAH NEGERI 1 CIREBON</h6>
            <h6>TAHUN PELAJARAN {{ $tahun_ajaran }}</h6>
        </div>
    </div>

    {{-- KETERANGAN --}}
    <div>
        <p>
            Berdasarkan Surat Keputusan Kepala MAN 1 Cirebon, nomor 1588/Ma.10.36/PS.01/06/2023, tanggal
            {{ $tgl_pengumuman }}, tentang Hasil Seleksi Peserta PPDB MAN 1 Cirebon Tahun Pelajaran {{ $tahun_ajaran }}.
            Sehubungan
            dengan hal tersebut, kami menyatakan bahwa:
        </p>
    </div>

    {{-- BIODATA --}}
    <div style="text-align: center; margin-bottom: 20px;">
        <table style="width: 500px; margin: 0 auto;">
            <tr>
                <td class="label" style="width: 200px;">NOMOR PESERTA</td>
                <td>:</td>
                <td class="value">{{ $kode_pendaftaran }}</td>
            </tr>
            <tr>
                <td class="label">NAMA</td>
                <td>:</td>
                <td class="value">{{ $nama_lengkap }}</td>
            </tr>
            <tr>
                <td class="label">ASAL SEKOLAH</td>
                <td>:</td>
                <td class="value">{{ $nama_sekolah_asal }}</td>
            </tr>
        </table>
    </div>

    {{-- DITERIMA --}}
    <div style="margin-bottom: 20px">
        <div style="text-align: center; border: 2px solid black; padding: 10px; width: 300px; margin: 0 auto; font-weight: bold;">
            DITERIMA
        </div>
    </div>

    {{-- PENUTUP --}}
    <div>
        <p>
            Demikian pengumuman ini kami sampaikan untuk ditindaklanjuti sebagaimana mestinya.
        </p>
    </div>

    {{-- TANDA TANGAN --}}
    <div style="text-align: right;">
        <table style="width: 50%; margin-left: auto;">
            <tr>
                <td style="text-align: right;">
                    <div>
                        <div>Cirebon, {{ $tgl_pengumuman }}</div>
                        <div>KETUA PPDB,</div>
                        <div>
                            <img src="{{ public_path('assets/img/logoman1.png') }}" alt="">
                        </div>
                        <div style="font-weight: bold;">Ketua PPDB</div>
                    </div>
                </td>
            </tr>
        </table>
    </div>

</body>

</html>
