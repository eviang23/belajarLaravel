<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">
            <img src="/image/Logo-UT_03.png" alt="Logo UT" width="170" height="33">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class=" me-auto mb-2 mb-lg-0">
                <div class="navbar-nav ">
                    <a class="nav-link active text-primary " aria-current="page" href="#">Tentang UT-Yogya</a>
                    <a class="nav-link   {{ $title === 'Marketing_Registrasi' ? 'active' : '' }} "
                        href="/Marketing_Registrasi">Marketing&Registrasi</a>

                    <a class="nav-link  {{ $title === 'Pembelajaran_Ujian' ? 'active' : '' }}"
                        href="/Pembelajaran_Ujian">Pembelajaran&Ujian</a>
                    {{-- <a class="nav-link disabled">Disabled</a> --}}

                    <li class="nav-item dropdown ">
                        <a class="nav-link  dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            AKADEMIK
                        </a>
                        <ul class="dropdown-menu">

                            
                            <li><a class="dropdown-item" href="/datamhs">DATA NILAI</a></li>
                            <li><a class="dropdown-item" href="/dataTtr">DATA TUTOR</a></li>
                            <li><a class="dropdown-item" href="#">TUTORIAL ONLINE</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">INFORMASI MAHASISWA</a></li>
                        </ul>
                    </li>


                    @auth

                        {{-- ketika sudah login , maka yg muncul LOGOUT --}}
                        <li class="nav-item">
                            <form action="/auth/logout" method="POST">
                                @csrf
                                <x-button type="Submit" colour="outline-warning" text="Log Out" />
                            </form>
                        </li>
                    @else
                        {{-- Lketika belum login , akan tampil LOGIN dan REGISTER --}}
                        <li>
                            <a class="nav-link  {{ $title === 'IndexLogin' ? 'active' : '' }}" href="/auth/login">LOGIN</a>
                        </li>
                        <li>
                            <a class="nav-link  {{ $title === 'IndexRegister' ? 'active' : '' }}"
                                href="/auth/register">REGISTER</a>
                        </li>

                    @endauth


                </div>
            </ul>
            {{--  
            <span>
                <form class="d-flex mr-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success  " type="submit">Search</button>
                </form>
            </span>
            --}}

        </div>
    </div>
</nav>
