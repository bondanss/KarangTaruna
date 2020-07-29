 @extends('template')

 @section('main')
 <div class="container">
     <div id="anggota">
         <h2>Detail Anggota</h2>

         <table class="table table-striped">
             <tr>
                 <th>NIK</th>
                <td>{{ $anggota->nik }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $anggota->nama_anggota }}</td>
            </tr>
            <tr>
                <th>Kelurahan</th>
                <td>{{ $anggota->kelurahan->nama_kelurahan }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $anggota->tanggal_lahir->format('d-m-Y') }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $anggota->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Telepon</th>
                <td>{{ !empty($anggota->telepon->nomor_telepon) ? $anggota->telepon->nomor_telepon : '-' }}</td>
            </tr>
            <tr>
                <th>Hobi</th>
                <td>
                @foreach($anggota->hobi as $item)
                <strong><span>{{ $item->nama_hobi }}</span></strong>,
                @endforeach
                </td>
            </tr>
            <tr>
                <th>Foto</th>
                <td>
                    @if (isset($anggota->foto))
                        <img src="{{ asset('fotoupload/' . $anggota->foto) }}">
                    @else
                        @if ($anggota->jenis_kelamin == 'L')
                            <img src="{{ asset('fotoupload/dummymale.jpg') }}">
                        @else
                            <img src="{{ asset('fotoupload/dummyfemale.jpg') }}">
                        @endif
                    @endif
                </td>
            </tr>
        </table>
    </div>
   </div>
@stop

@section('footer')
@stop