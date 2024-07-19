@extends('auth.layout')
@section('content')
@include('sweetalert::alert')
    <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-white">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card z-index-0">
                <div class="card-header text-center pt-4">
                    <h5>Register</h5>
                </div>

            {{-- @if ($message = Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endif --}}


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
                            <div class="input-group">
                                <input id="password2" type="password" name="password" class="form-control" placeholder="Kata Sandi" aria-label="Password" value="{{ old('password') }}">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i id="togglePassword2" class="fas fa-eye"></i>
                                    </span>
                                </div>
                            </div>
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

    <style>
        .input-group {
            position: relative;
        }

        .input-group .input-group-append {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 15px;
        }

        .input-group .input-group-text {
            background: none;
            border: none;
            cursor: pointer;
        }
        </style>

        <script>
        document.getElementById('togglePassword2').addEventListener('click', function (e) {
            const passwordInput = document.getElementById('password2');
            const icon = e.target;
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
        </script>

@endsection
