@extends ('layout.halutama')
@section('content')
    <h5 class="  text-primary fs-4 ms-1 fw-bold">FORM REGISTER</h5>

    <div class="container">
        <form action="/auth/register" method="POST">
            @csrf
            {{-- generated --}}
            {{-- <input type="hidden" name="_token" value={{ csrf_token() }}> --}}
            <div class="mb-2 row ">
                <label for="name" class=" col-sm-2 form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class=" form-control @error('name') is-invalid @enderror" id="name"
                        placeholder="Masukkan nama Anda ..." name="name" {{--  required (untuk validasi ganda)--}} value="{{ old('name') }}">

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


            </div>

            <div class="mb-2 row ">
                <label for="email" class="form-label col-sm-2 fw-bold">Email address</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="Masukkan email Anda ..." name="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
            </div>

            {{--  <div class="mb-2 row">
          <label class="control-label col-sm-2 fw-bold" for="nama">Username</label>
          <div class="col-sm-5">
              <input type="text" class="form-control">
          </div>
      </div> --}}

            <div class="mb-2 row">
                <label for="inputPassword" class="col-sm-2 form-label fw-bold">Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword"
                        placeholder="Masukkan password Anda ..." name="password">

                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="mb-2 row ">
                <label for="password_confirmation" class=" col-sm-2 form-label">Konfirmasi Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                        id="password" placeholder="Konfirmasi password Anda ..." name="password_confirmation">

                    @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-text">
                Sudah Punya Akun ? <a href="/auth/login" class="text-decoration-none">Login</a>
            </div>

            <div class="d-grid mt-2">
                <x-button type="submit" text="Register" color="outline-primary" />
            </div>

        </form>
    </div>
@endsection
