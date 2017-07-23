@extends('base')

@section('title')
    Tambah
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-6">
            {!! Form::open(['url' => 'pengadaan/create']) !!}
            <div class="form-group">
                {!! Form::label('no_pengadaan', 'No Pengadaan:', ['class' => 'control-label']) !!}
                {!! Form::text('no_pengadaan', '', ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('jml_pengadaan', 'Jumlah Pengadaan:', ['class' => 'control-label']) !!}
                {!! Form::text('jml_pengadaan', null, ['class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {{ Form::label('id_pengajuan', 'No Pengajuan', ['class' => 'form-label']) }}
                {{ Form::select('id_pengajuan', $pengajuanNama, null, ['class' => 'form-control', 'id' => 'id_pengajuan']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Simpan', ['class' => 'btn btn-primary btn-lg btn-block']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
