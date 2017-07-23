@extends('base')

@section('title')
    Edit
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-6">
            {!! Form::model($barang, ['method' => 'post', 'action' => ['BarangController@update', $barang->id]]) !!}
            {!! Form::hidden('id_pengajuan',$barang->id_pengajuan, ['id' => 'id_pengajuan']) !!}
            <div class="form-group">
                {!! Form::label('kdBarang', ' Kode Barang:', ['class' => 'control-label']) !!}
                {!! Form::text('kdBarang', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('nama', 'Nama Barang:', ['class' => 'control-label']) !!}
                {!! Form::text('nama', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('hrg_satuan', 'Harga Satuan:', ['class' => 'control-label']) !!}
                {!! Form::text('hrg_satuan', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('jenis_barang', 'Jenis Barang:', ['class' => 'control-label']) !!}
                {!! Form::text('jenis_barang', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {{ Form::submit('Simpan', ['class' => 'btn btn-primary btn-lg btn-block']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop