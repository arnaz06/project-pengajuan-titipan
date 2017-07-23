@extends('base')

@section('title')
    Tambah
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-6">
            {!! Form::open(['url' => 'barang/create']) !!}
            @if(isset($pengajuan))
                {!! Form::hidden('id_pengajuan',$pengajuan->id, ['id' => 'unit_id']) !!}
            @endif
            <div class="form-group">
                {!! Form::label('kdBarang', 'Kode Barang:', ['class' => 'control-label']) !!}
                {!! Form::text('kdBarang', '', ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('nama', 'Nama Barang:', ['class' => 'control-label']) !!}
                {!! Form::text('nama', '', ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('hrg_satuan', 'Harga Satuan:', ['class' => 'control-label']) !!}
                {!! Form::text('hrg_satuan', '', ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('jenis_barang', 'Jenis Barang:', ['class' => 'control-label']) !!}
                {!! Form::text('jenis_barang', null, ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="form-group">
                {{ Form::submit('Simpan', ['class' => 'btn btn-primary btn-lg btn-block']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
