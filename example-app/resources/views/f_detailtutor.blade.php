@extends ('layout.halutama')
@section('content')
    <h3 class="text-primary">Detail Mahasiswa : {{ $id }}</h3>
    {{--    {{ $data['nama']}}   --}}

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-uppercase">Nama : {{ $data['nama'] }}</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">No Induk : {{ $data['No_induk'] }}</li>
                <li class="list-group-item">Nilai : {{ $data['nilai'] }}</li>
                <li class="list-group-item">Gender : {{ $data['personal']['gender'] === 1 ? 'Perempuan' : 'Laki-laki' }}</li>
                <li class="list-group-item">Alamat : {{ $data['personal']['alamat'] }}</li>
                <li class="list-group-item">Usia : {{ $data['personal']['usia'] }}</li>
            </ul>
        </div>
    </div class="card-footer">
    <x-button-link url="/home" btnColor="primary" text="Kembali" />
@endsection
