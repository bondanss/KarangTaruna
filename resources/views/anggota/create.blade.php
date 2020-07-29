@extends('template')

@section('main')
<div class="container">
	<div id="anggota">
		<h2>Tambah Anggota</h2>

		{!! Form::open(['url' => 'anggota', 'files' => true]) !!}
		@include('anggota.form', ['submitButtonText'=> 'Simpan'])
	
		{!! Form::close() !!}
	</div>
</div>
@stop

@section('footer')

@stop