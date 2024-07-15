@extends('auth.layout')
@section('content')
    <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
                <div class="card-header text-center pt-4">
                    <h5>Register</h5>
                </div>
                @if ($message = Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @endif

                <div class="card-body">
                    <form class="form" method="post" action="{{ route('register-post') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="nama_peserta" placeholder="Nama Peserta" aria-label="Name" value="{{ old('nama_peserta') }}">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="asal_sekolah" placeholder="Asal Sekolah" aria-label="Asal Sekolah" value="{{ old('asal_sekolah') }}">
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" name="no_hp" placeholder="No Hp/Whatsapp" aria-label="No Hp" value="{{ old('no_hp') }}">
                        </div>

                        <div class="mb-3">
                            <input type="number" class="form-control" name="nisn" placeholder="Nisn" aria-label="Nisn" value="{{ old('nisn') }}">
                            @include('alerts.feedback', ['field' => 'nisn'])
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Kata Sandi" aria-label="Password" name="password" value="{{ old('password') }}">
                        </div>
                        {{-- <div class="form-check form-check-info text-start">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                            <label class="form-check-label" for="flexCheckDefault">
                                I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and
                                    Conditions</a>
                            </label>
                        </div> --}}
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Buat Akun</button>
                        </div>
                        <p class="text-sm mt-3 mb-0">Sudah punya akun? <a href="{{ route('login') }}"
                                class="text-dark font-weight-bolder">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
