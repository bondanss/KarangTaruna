@extends('template')

@section('main')
<div class="container">
    <div id="hobi">
        <h2>Tambah Hobi</h2>

        {!! Form::open(['url' => 'hobi']) !!}
            @include('hobi.form', ['submitButtonText' => 'Tambah Hobi'])
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('footer')
@stop