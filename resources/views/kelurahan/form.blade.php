@if (isset($kelurahan))
    {!! Form::hidden('id', $kelurahan->id) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_kelurahan') ? 'has-error' : 'has-success' }}">
@else
     <div class="form-group">
@endif
    {!! Form::label('nama_kelurahan', 'Nama Kelurahan:', ['class' => 'control-label']) !!}
    {!! Form::text('nama_kelurahan', null, ['class' => 'form-control']) !!}
    @if ($errors->has('nama_kelurahan'))
        <span class="help-block">{{ $errors->first('nama_kelurahan') }}</span>
    @endif
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>