@extends('template')

@section('main')
	<div id="anggota">
		<h2>Tambah Anggota</h2>

		{!! Form::open(['url' => 'anggota', 'files' => true]) !!}
		@include('anggota.form', ['submitButtonText'=> 'Simpan'])
	
		{!! Form::close() !!}
	</div>

@stop

@section('footer')

@stop