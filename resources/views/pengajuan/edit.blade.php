@extends('base')

@section('title')
    Edit
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-6">
            {!! Form::model($pengajuan, ['method' => 'post', 'action' => ['PengajuanController@update', $pengajuan->id]]) !!}
            {!! Form::hidden('acc',$pengajuan->acc, ['acc' => 'acc']) !!}
            {!! Form::hidden('id_unit',$pengajuan->id_unit, ['id_unit' => 'id_unit']) !!}
            <div class="form-group">
                {!! Form::label('no_pengajuan', 'Nomer Pengajuan:', ['class' => 'control-label']) !!}
                {!! Form::text('no_pengajuan', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('jml_pengajuan', 'Jumlah Pengajuan:', ['class' => 'control-label']) !!}
                {!! Form::text('jml_pengajuan', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {{ Form::submit('Simpan', ['class' => 'btn btn-primary btn-lg btn-block']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop