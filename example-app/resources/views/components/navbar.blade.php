<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/image/Logo-UT_03.png" alt="Logo UT" width="150" height="30">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active " aria-current="page" href="#">Tentang UT Yogya</a>
          <a class="nav-link {{$title === 'Features' ? 'active' : '' }}" href="/Features">Marketing dan Registrasi</a>
          <a class="nav-link {{$title === 'DaftarHarga' ? 'active' : '' }}"  href="/DaftarHarga">Pembelajaran dan Ujian</a>
          <a class="nav-link disabled">Disabled</a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>