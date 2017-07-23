@extends('base')

@section('title')
    Tambah
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-6">
            {!! Form::open(['url' => 'pengajuan/create']) !!}
            @if(isset($unit))
                {!! Form::hidden('unit_id',$unit->id, ['id' => 'unit_id']) !!}
            @else
                <div class="form-group">
                    {{ Form::label('customer_id', 'Customer', ['class' => 'form-label']) }}
                    {{ Form::select('customer_id', $unit, null, ['class' => 'form-control', 'id' => 'customer_id']) }}
                </div>
            @endif
            <div class="form-group">
                {!! Form::label('no_pengajuan', 'No Pengajuan:', ['class' => 'control-label']) !!}
                {!! Form::text('no_pengajuan', '', ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('jml_pengajuan', 'Jumlah Pengajuan:', ['class' => 'control-label']) !!}
                {!! Form::text('jml_pengajuan', null, ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="form-group">
                {{ Form::submit('Simpan', ['class' => 'btn btn-primary btn-lg btn-block']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
