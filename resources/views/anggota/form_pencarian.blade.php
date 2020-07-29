<div id="pencarian">
{!! Form::open(['url' => 'anggota/cari', 'method' => 'GET', 'id' => 'form-pencarian']) !!}
     <div class="row">
         <div class="col-md-2">
             {!! Form::select('id_kelurahan', $list_kelurahan, (! empty($id_kelurahan) ? $id_kelurahan : null), ['id' => 'id_kelurahan', 'class' => 'form-control', 'placeholder' => '-Kelurahan-']) !!}
         </div>

         <div class="col-md-2">
             {!! Form::select('jenis_kelamin', ['L' => 'Laki-laki', 'P' => 'Perempuan'], (! empty($jenis_kelamin) ? $jenis_kelamin : null), ['id' => 'jenis_kelamin', 'class' => 'form-control', 'placeholder' => '-Kelamin-']) !!}
        </div>

        <div class="col-md-8">
            <div class="input-group">
            {!! Form::text('kata_kunci', (! empty($kata_kunci)) ? $kata_kunci : null,['class' => 'form-control', 'placeholder' => 'Masukkan Nama Anggota']) !!}
            &nbsp;
            <span class="input-group-btn">
            {!! Form::button('Cari', ['class' => 'btn btn-default', 'type' => 'submit']) !!}
            </span>
            </div>
        </div>
    </div>
{!! Form::close() !!}
</div>