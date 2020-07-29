@extends('template')

@section('main')
<head>
	<!-- <link href="{{ asset('bootstrap-3.3.6-dist/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('css/style.css')}}" rel="stylesheet"> -->
</head>
<div class="container">
<div id="anggota"><p>
	<h2> Anggota </h2>

	@include('_partial.flash_message')

    @include('anggota.form_pencarian')

	@if (!empty($anggota_list))
		<table class="table">
			<thead>
				<tr>
					<th>NIK</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Kelurahan</th>
					<th>Tgl Lahir</th>
					<th>JK</th>
					<th>Telepon</th>
					<th>Opsi</th>
					@if (Auth::check())
					<th><center>Hapus</center></th>
					@endif
				</tr>
			</thead>

			<tbody>
				@foreach($anggota_list as $anggota)
				<tr>
					<td>{{ $anggota->nik }}</td>

					<td>{{ $anggota->nama_anggota }}</td>

					<td>{{ $anggota->alamat }}</td>

					<td>{{ $anggota->kelurahan->nama_kelurahan }}</td>

					<td>{{ $anggota->tanggal_lahir->format('d-m-Y') }}</td>
					
					<td>{{ $anggota->jenis_kelamin }}</td>

					<td>{{ !empty($anggota->telepon->nomor_telepon) ? 
						$anggota->telepon->nomor_telepon : '-' }}</td>
					<td>
					<a class="btn btn-info btn-sm" href="{{ url('anggota/'.$anggota->id) }}"> Detail </a>
					@if (Auth::check())
					<a class="btn btn-success btn-sm" href="{{ url('anggota/'.$anggota->id. '/edit') }}"> Edit </a>
					</td>
					<td>
						<center>
					<a class="box-button" onclick="return confirm('Are you sure?')">
							{!! Form::open(['method' => 'DELETE', 'action' => ['AnggotaController@destroy', $anggota->id]]) !!}

							{!! Form::submit('x', ['class' => 'btn btn-danger btn-sm']) !!}

							{!! Form::close() !!}
						</a>
					</center>
					</td>
					@endif

					<!-- <td>{{ url('anggota/' . $anggota->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}</td> -->
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
			<p>Tidak ada data anggota.</p>
		@endif

		<div class="table-nav">
			<div class="jumlah-data">
				<strong>Jumlah Anggota: {{ $jumlah_anggota }} </strong>
			</div>

			<div class="paging">
				{{ $anggota_list->links() }}
			</div>
		</div>
		<p>

		@if (Auth::check())
		<div class="tombol-nav">
			<a href="{{ url('anggota/create') }}" class="btn btn-primary"> Tambah Anggota </a>
		</div>
		@endif
</div>
</div>
<p>
	<p>
@stop

@section('footer')

@stop