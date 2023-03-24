<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>List Mahasiswa</h3>


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
                  </tr>
              @endforeach

          </tbody>
      </table>

</body>
</html>