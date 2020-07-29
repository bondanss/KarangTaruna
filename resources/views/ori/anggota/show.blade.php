@extends('template')

@section('main')
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
						<th>Alamat</th>
						<td>{{ $anggota->alamat }}</td>
					</tr>
					<tr>
						<th>Tgl Lahir</th>
						<td>{{ $anggota->tanggal_lahir->format('d-m-Y') }}</td>
					</tr>
					<tr>
						<th>JK</th>
						<td>{{ $anggota->jenis_kelamin }}</td>
					</tr>
					<tr>
						<th>Telepon</th>
						<td>{{ $anggota->telepon->nomor_telepon }}</td>
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

			<div class="tombol-nav">
				<a href="{{ url('anggota') }}" class="btn btn-primary"> Kembali </a>
			</div>

		</div>
@stop

@section('footer')
<div id="footer">
		<p>&copy; 2020 anggota.app</p>
	</div>
@stop