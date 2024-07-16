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
                            <input type="text" name="password" class="form-control {{ $errors->has('password') ? ' has-danger' : '' }}" placeholder="Password" aria-label="Password" value="{{ old('password') }}">
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

@endsection
