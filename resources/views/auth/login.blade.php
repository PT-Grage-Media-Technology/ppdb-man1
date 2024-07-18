@extends('auth.layout')
@section('title', 'Login')
@section('content')


    <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            @if ($message = Session::get('error'))
            <div class="alert alert-danger text-white" role="alert">
                {{ $message }}
            </div>
             @endif
            <div class="card z-index-0">
                <div class="card-header text-center pt-4">
                    <h5>Login</h5>
                </div>


                <div class="card-body">
                    <form class="form" method="post" action="{{ route('login') }}">
                        @method('POST')
                        @csrf

                        <div class="mb-3 {{ $errors->has('nisn') ? ' has-danger' : '' }}">
                            <input type="number" name="nisn" class="form-control {{ $errors->has('nisn') ? ' has-danger' : '' }}" placeholder="NISN" aria-label="NISN" value="{{ old('nisn') }}">
                            @include('alerts.feedback', ['field' => 'nisn'])
                        </div>
                        <div class="mb-3 {{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group">
                                <input id="password" type="password" name="password" class="form-control {{ $errors->has('password') ? ' has-danger' : '' }}" placeholder="Password" aria-label="Password" value="{{ old('password') }}">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i id="togglePassword" class="fas fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>



                        {{-- <div class="form-check form-check-info text-start">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                            <label class="form-check-label" for="flexCheckDefault">
                                I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and
                                    Conditions</a>
                            </label>
                        </div> --}}
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Login</button>
                        </div>
                        <p class="text-sm mt-3 mb-0">Belum punya akun? <a href="{{ route('register') }}"
                                class="text-dark font-weight-bolder">Daftar</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if (session('success'))
        <script>
            toastr.success("{{ session('success') }}");
        </script>
    @endif

    @if (session('error'))
        <script>
            toastr.error("{{ session('error') }}");
        </script>
    @endif

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
            width: 40px;
            background: none;
            border: none;
            cursor: pointer;

        }

        .input-group .input-group-text {
            background: none;
            border: none;
            cursor: pointer;
        }
        </style>

        <script>
        document.getElementById('togglePassword').addEventListener('click', function (e) {
            const passwordInput = document.getElementById('password');
            const icon = e.target;
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
        </script>

@endsection
