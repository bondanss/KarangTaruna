@extends('template')

@section('main')
<div class="container">
    <div id="kelurahan">
    <h2>Edit Kelurahan</h2>

    {!! Form::model($kelurahan, ['method' => 'PATCH', 'action' => ['KelurahanController@update', $kelurahan->id]]) !!}
        @include('kelurahan.form', ['submitButtonText' => 'Update Kelurahan'])
    {!! Form::close() !!}
    </div>
   </div>
@stop

@section('footer')
@stop