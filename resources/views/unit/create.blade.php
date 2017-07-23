@extends('base')

@section('title')
    Tambah
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-6">
            {!! Form::open(['url' => 'unit/create']) !!}
            <div class="form-group">
                {!! Form::label('kdUnit', 'Kode Unit', ['class' => 'control-label']) !!}
                {!! Form::text('kdUnit', '', ['class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('nama', 'Nama:', ['class' => 'control-label']) !!}
                {!! Form::text('nama', null, ['class' => 'form-control', 'required']) !!}
            </div>


            <div class="form-group">
                {{ Form::submit('Simpan', ['class' => 'btn btn-primary btn-lg btn-block']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
