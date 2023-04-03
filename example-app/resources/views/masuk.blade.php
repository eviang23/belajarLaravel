@extends ('layout.halutama')
@section('content')

<div class="px-2 bg-light ">
    <marquee class="py-3 text-info" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
    Selamat datang di UT YOGYAKARTA , Tutorial Online - Tuton dimulai 10 April - 12 Juni 2023 ,
    Tutorial Tatap Muka -TTM dimulai 8 April - 18 Juni 2023
</marquee></div>

    <div class="text-center">
        <img src="/image/utjog.jpg" class=" rounded mx-auto d-block" alt="UT YOGYAKARTA" width="400" height="300">
    </div>
    <h5 class="text-center text-primary fs-6">UNIVERSITAS TERBUKA YOGYAKARTA</h5>
    <h6 class="text-center text-primary fs-6">Jl. Bantul No.81, Kota Yogyakarta, DIY 55142</h6>
   
    {{-- <div>
        <h4 class=" fw-bold text-primary ">
            Selamat Datang di Universitas Terbuka , {{ $user }}</h4>
        <p>
        <h5 class="fs-6 fw-light fst-italic text-danger">
            @for ($i = 1; $i < 10; $i++)
                item ke-{{ $i }}
            @endfor
        </h5>
        </p> --}}

        {{--    <p><a type="button" href='/login' class=" btn btn-primary ">LOGIN</a> </p>    --}}

        {{-- <p><a type="button" href='/DP' class=" btn btn-primary ">Silakan Lihat Data Pribadi Anda</a> </p>

    </div> --}}
    {{-- }}
      <p><h4>Usia : {{ $usia }}</h4>

      @switch($grade)
          @case($grade >= 90)
              <h4>Grade : A</h4>
          @break

          @case($grade >= 80)
              <h4>Grade : B</h4>
          @break

          @default
              <h4>Grade : C</h4>
      @endswitch

      @if ($usia >= 21)
          <h4>Kategori Dewasa</h4>
      @elseif ($usia >= 13)
          <h4>Kategori Remaja</h4>
      @else
          <h4>Ketegori Anak-anak</h4>
      @endif
      <h4 class=" ms-3 ">

          @if ($isMember)
              <h4>Anda adalah Member</h4>
          @else
              <h4>Anda Bukan Member</h4>
          @endif

      </h4>
    </p>

     --}}


    {{-- <h3>List Mahasiswa</h3>


      <table class="table table-bordered table table-striped">
          <thead class ="table-info">
              <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">No Induk</th>
                  <th scope="col">Nilai</th>
                  <th scope="col">Kategori</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($datamahasiswa as $item)
                  <tr>
                      <th scope="row">{{ $loop->index + 1 }}</th>
                      <td>{{ $item['nama'] }}</td>
                      <td>{{ $item['No_induk'] }}</td>
                      <td> {{ $item['nilai'] }}</td>
                      @switch($item['nilai'])
                          @case($item['nilai'] >= 90)
                              <td>A</td>
                          @break

                          @case($item['nilai'] >= 80)
                              <td>B</td>
                          @break

                          @case($item['nilai'] >= 70)
                              <td>C</td>
                          @break

                          @case($item['nilai'] >= 60)
                              <td>D</td>
                          @break

                          @default
                              <td>E</td>
                      @endswitch
                  </tr>
              @endforeach

          </tbody>
      </table> --}}




    <p class=" p-1 text-info fs-6 fixed-bottom fst-italic">@Copyright {{ date('Y') }} UnivTerbuka</p>
@endsection
