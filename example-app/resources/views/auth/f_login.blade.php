@extends ('layout.halutama')
@section ('content')
 {{-- Allert message --}}

 @if (session('login-error'))
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('login-error')}}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
 @endif


    <h5 class ="  text-primary fs-4 ms-1 fw-bold">LOGIN</h5>

   <p class="p-2">
    <form action="/auth/login" method="POST"> {{-- untuk kembali ke menu login --}}
      @csrf
        <div class="mb-1 ms-1">
          <label for="email" class="form-label fw-bold">Alamat Email </label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email Anda ..." name="email">
          @error('email')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
        </div>

        <div class="mb-1 ms-1">
          <label for="inputPassword" class="form-label fw-bold">Password </label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword" placeholder="Masukkan password Anda ..." name="password">
          @error('password')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
        </div>

        <div class="form-text">
          Belum Punya Akun ? <a href="/auth/register" class="text-decoration-none">Register</a>
      </div>

      <div class="d-grid mt-2">
          <x-button type="submit" text="LOGIN" color="outline-primary" />
      </div>
        <a type="button" href='/home' class="btn btn-primary">KEMBALI</a>
      </form>
   </p> 
     
@endsection