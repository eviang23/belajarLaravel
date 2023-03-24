@extends ('layout.halutama')
@section ('content')

    <p><h4>Nama : {{ $user }}</h4>
        <h4>Usia : {{ $usia }}</h4>

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
            <h4>Kategori : Remaja</h4>
        @else
            <h4>Ketegori : Anak-anak</h4>
        @endif
        <h4 class=" ms-3 ">
  
            @if ($isMember)
                <h4>Anda adalah Member</h4>
            @else
                <h4>Anda Bukan Member</h4>
            @endif
  
        </h4>
      </p>
@endsection