@extends ('layout.halutama')
@section('content')
    <h3 class="text-primary">Detail Mahasiswa : {{ $id }}</h3>
    <x-button-link url="/mahasiswa/edit/{{ $id }}" text="Edit" btnColor="warning" textColor="black" />
    {{--    {{ $data['nama']}}   --}}

   
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-uppercase">Nama : {{ $data['nama'] }}</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">No Induk : {{ $data['No_induk'] }}</li>
                <li class="list-group-item">Nilai : {{ $data['nilai'] }}</li>
                <li class="list-group-item">Gender : {{ $data['gender'] === 1 ? 'Perempuan' : 'Laki-laki' }}</li>
                <li class="list-group-item">Alamat : {{ $data['alamat'] }}</li>
                <li class="list-group-item">Usia : {{ $data['usia'] }}</li>
            </ul>
        </div>
    </div>
    <div   class="card-footer">
    <x-button-link url="/datamhs" btnColor="primary" text="Kembali" />
    </div>

@endsection
