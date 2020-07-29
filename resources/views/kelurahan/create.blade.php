@extends('template')

@section('main')
<div class="container">
    <div id="kelurahan">
        <h2>Tambah Kelurahan</h2>

        {!! Form::open(['url' => 'kelurahan']) !!}
            @include('kelurahan.form', ['submitButtonText' => 'Tambah Kelurahan'])
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('footer')
@stop