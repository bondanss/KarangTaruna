 @extends('template')

 @section('main')
 <div class="container">
     <div id="kelurahan">
        <p>
         <h2>Kelurahan</h2>

         @include('_partial.flash_message')

         @if (count($kelurahan_list) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kelurahan</th>
                        <th>Action</th>
                        <th><center>Hapus</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    <?php foreach($kelurahan_list as $kelurahan): ?>
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $kelurahan->nama_kelurahan }}</td>
                        <td>
                            <div class="box-button">
                                {{ link_to('kelurahan/' . $kelurahan->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
                            </div>
                        </td>
                        <td><center>
                            <div class="box-button">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['KelurahanController@destroy', $kelurahan->id]]) !!}
                                    {!! Form::submit('x', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </div>
                            </center>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        @else
            <p>Tidak ada data kelurahan.</p>
        @endif

        <div class="tombol-nav">
            <a href="kelurahan/create" class="btn btn-primary">Tambah Kelurahan</a>
        </div>

    </div> 
</div>
    <!-- / #kelurahan -->
@stop

@section('footer')
@stop