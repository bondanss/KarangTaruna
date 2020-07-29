@extends('template')

@section('main')
	<div id="anggota">
		<h2>Edit anggota</h2>

{!! Form::model ($anggota, ['method' => 'PATCH', 'files' => true, 'action' => ['AnggotaController@update', $anggota->id]]) !!}

	@include('anggota.form', ['submitButtonText'=> 'Update'])
	<div class="tombol-nav">
				<a href="{{ url('anggota') }}" class="btn btn-primary"> Kembali </a>
			</div>
	
	{!! Form::close() !!}
	</div>
	@stop

	@section('footer')
	@stop