@extends('auth.layout')
@section('content')
    <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
                <div class="card-header text-center pt-4">
                    <h5>Selamat Pendaftaran Berhasil</h5>
                    <h6>Hai!,{{ auth()->user()->nama_peserta }}</h6>
                    <p>Kode Pendaftaran : {{ auth()->user()->kode_pendaftaran }}</p>
                </div>

                <div class="text-center">
                    <h5>"Akun Anda Berhasil Di Buat"</h5>
                    <h6>silahkan login dengan menggunakan</h6>
                    <p class=" mt-3 mb-0">Nisn : {{ auth()->user()->nisn }}</p>
                    <p class="mt-0 mb-0">Kata Sandi: {{ session('original_password') }}</p>
                </div>
                <h5 class="text-center">Mohon Ingat Jika Perlu Screenshot!</h5>
                <div class="text-center">
                    <a href="{{ route('formulir-pendaftaran') }}" class="btn bg-gradient-dark w-100 my-4 mb-2">Lanjut Proses?</a>
                </div>
                {{-- <div class="text-center">
                    <a href="https://grageacademy.online" class="btn bg-gradient-dark w-100 my-4 mb-2">Lanjut Nanti?</a>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
