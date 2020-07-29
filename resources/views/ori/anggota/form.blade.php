@if (isset($anggota))
	{!! Form::hidden('id', $anggota->id) !!}
@endif

@if($errors->any())
		<div class="form-group {{ $errors->has('nik') ? 'has-error' : 'has-success' }}">
	@else
		<div class="form-group">
	@endif
	{!! Form::label('nik', 'NIK :', ['class' => 'control-label']) !!}
	{!! Form::text('nik', null, ['class' => 'form-control', 'placeholder' => 'NIK']) !!}

	@if ($errors->has('nik'))
		<span class="help-block">{{ $errors->first('nik') }}</span>
	@endif	
	</div>

@if($errors->any())
		<div class="form-group {{ $errors->has('nama_anggota') ? 'has-error' : 'has-success' }}">
	@else
		<div class="form-group">
	@endif
	{!! Form::label('nama_anggota', 'Nama :', ['class' => 'control-label']) !!}
	{!! Form::text('nama_anggota', null, ['class' => 'form-control']) !!}

	@if ($errors->has('nama_anggota'))
		<span class="help-block">{{ $errors->first('nama_anggota') }}</span>
	@endif	
	</div>

@if($errors->any())
		<div class="form-group {{ $errors->has('alamat') ? 'has-error' : 'has-success' }}">
	@else
		<div class="form-group">
	@endif
	{!! Form::label('alamat', 'Alamat :', ['class' => 'control-label']) !!}
	{!! Form::text('alamat', null, ['class' => 'form-control']) !!}

	@if ($errors->has('alamat'))
		<span class="help-block">{{ $errors->first('alamat') }}</span>
	@endif	
	</div>

@if($errors->any())
		<div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : 'has-success' }}">
	@else
		<div class="form-group">
	@endif
	{!! Form::label('tanggal_lahir', 'Tanggal Lahir :', ['class' => 'control-label']) !!}
	{!! Form::date('tanggal_lahir', !empty($anggota) ?
	$anggota-> tanggal_lahir -> format('d-m-Y'): null,
	['class' => 'form-control', 'id' => 'tanggal_lahir']) !!}

	@if ($errors->has('tanggal_lahir'))
		<span class="help-block">{{ $errors->first('tanggal_lahir') }}</span>
	@endif
	</div>



@if($errors->any())
		<div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : 'has-success' }}">
	@else
		<div class="form-group">
	@endif
	{!! Form::label('jenis_kelamin', 'Jenis Kelamin :', ['class' => 'control-label']) !!}
	<div class="radio">
		<label>{!! Form::radio('jenis_kelamin','L') !!} Laki-Laki </label>
		<label>{!! Form::radio('jenis_kelamin','P') !!} Perempuan </label>
	</div>

	@if ($errors->has('jenis_kelamin'))
		<span class="help-block">{{ $errors->first('jenis_kelamin') }}</span>
	@endif
	</div>

	@if($errors->any())
		<div class="form-group {{ $errors->has('nomor_telepon') ? 'has-error' : 'has-success' }}">
	@else
		<div class="form-group">
	@endif
	{!! Form::label('nomor_telepon', 'Telepon :', ['class' => 'control-label']) !!}
	{!! Form::text('nomor_telepon', null, ['class' => 'form-control']) !!}

	@if ($errors->has('nomor_telepon'))
		<span class="help-block">{{ $errors->first('nomor_telepon') }}</span>
	@endif	
	</div>

<!-- FOTO -->
	@if ($errors->any())
		<div class="form-group {{ $errors->has('foto') ? 'has-error' : 'has-success' }}">
	@else
		<div class="form-group">
	@endif
    {!! Form::label('foto', 'Foto:') !!}
    {!! Form::file('foto') !!}
    @if ($errors->has('foto'))
        <span class="help-block">{{ $errors->first('foto') }}</span>
    @endif

    <!-- MENAMPILKAN FOTO -->
    @if (isset($anggota))
        @if (isset($anggota->foto))
            <img src="{{ asset('fotoupload/' . $anggota->foto) }}">
        @else
            @if ($anggota->jenis_kelamin == 'L')
                <img src="{{ asset('fotoupload/dummymale.jpg') }}">
            @else
                <img src="{{ asset('fotoupload/dummyfemale.jpg') }}">
            @endif
        @endif
    @endif
	</div>
</div>




	<div class="form-group">
		{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	</div>
