@extends ('layout.halutama')
@section ('content')


    <h3 class="text-center text-primary">Daftar Nilai Mahasiswa</h3>


      <table class="table table-bordered table table-striped">
          <thead class ="table-info ">
              <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">No Induk</th>
                  <th scope="col">Nilai</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Action</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($dtmhs as $item)
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
                        <td>
                            <x-button-link text="Detail" url="/detail/{{ $item['id']}}" btnColor="info" />
                        </td>

                  </tr>
              @endforeach

          </tbody>
      </table>

@endsection