@extends ('layout.halutama')
@section('content')
    <h3 class="text-primary">Detail Tutor : {{ $id_tutor }}</h3>
    {{--    {{ $data['nama']}}   --}}
{{-- @dd($datator) --}}
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-uppercase">Nama : {{ $datator['nama_tutor'] }}</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Id Tutor : {{ $datator['id_tutor'] }}</li>
                <li class="list-group-item">Gender : {{ $datator['gender'] === 1 ? 'Perempuan' : 'Laki-laki' }}</li>
                <li class="list-group-item">Usia : {{ $datator['usia'] }}</li>
                <li class="list-group-item">Email : {{ $datator['email'] }}</li>
                <li class="list-group-item">Bidang Keahlian : {{ $datator['bidang_keahlian'] }}</li>
                <li class="list-group-item">Periode Mengajar : {{ $datator['periode_mengajar'] }}</li>
            </ul>
        </div>
    </div class="card-footer">
    <x-button-link url="/dataTtr" btnColor="primary" text="Kembali" />
@endsection
