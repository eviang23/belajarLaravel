@extends ('layout.halutama')
@section ('content')

    <h5 class ="  text-primary fs-4 ms-1 fw-bold">Silakan login terlebih dahulu</h5>

   
    <form>
        <div class="mb-1 ms-1">
          <label for="exampleInputEmail1" class="form-label fw-bold">Alamat Email </label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text fst-italic ">Kami tidak akan pernah membagikan email Anda kepada orang lain.</div>
        </div>
        <div class="mb-1 ms-1">
          <label for="exampleInputPassword1" class="form-label fw-bold">Password </label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 ms-1 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label fw-bold" for="exampleCheck1">Periksa Saya</label>
        </div>
        <button type="submit" class="btn btn-primary ms-1">LOGIN</button>
        <a type="button" href='/home' class="btn btn-primary">KEMBALI</a>
      </form>
     
     
@endsection