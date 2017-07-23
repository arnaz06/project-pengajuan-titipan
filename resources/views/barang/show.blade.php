@extends('base')

@section('title')
    Detail
@endsection

@section('body')
    <div class="row">
        <div class="col-sm-3">
            NO Pengajuan
        </div>
        <div class="col-sm-6">
            <p>
                : {{ $pengajuan->no_pengajuan }}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            Jumlah Pengajuan
        </div>
        <div class="col-sm-6">
            <p>
                : {{ $pengajuan->jml_pengajuan }}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            Kode Unit
        </div>
        <div class="col-sm-6">
            <p>
                : {{ $unit->kdUnit }}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <a onclick="window.history.back()"><button type="button" class="btn btn-default" name="button"><span class="fa fa-chevron-left "></span> Kembali </button></a>
            <a href="{{url('/pengajuan/'.$pengajuan->id.'/edit')}}"><button type="button" class="btn btn-success" name="button"><span class="fa fa-edit"></span> Edit</button></a>
            <a href="{{url('/pengajuan/'.$pengajuan->id.'/delete')}}"><button type="button" class="btn btn-danger" name="button"><span class="fa fa-times"></span> Hapus</button></a>
        </div>
    </div>


    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{--<a href="{{url('customer/'.$customer->id.'/project/create')}}">--}}
                    <button type="button" class="btn btn-success" name="button">
                        <span class="fa fa-plus"></span> Tambah
                    </button>
                </a>
            </div>
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="customer_projects_table">
                    <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama</th>
                        <th>Harga Satuan</th>
                        <th>Jenis Barang</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--@if(isset($projects))--}}
                        {{--@foreach($projects as $show)--}}
                            {{--<tr>--}}
                                {{--<td>{{ $show->name }}</td>--}}
                                 {{--@foreach($projectstatuss as $status)--}}
                                {{--<td>{{$show->projectstatus->name}}</td>--}}
                                 {{--@endforeach--}}

                                {{--<td>{{$show->rating}}</td>--}}
                                {{--<td>{{$show->signer}}</td>--}}
                                {{--<td>{{$show->quotation_number}}</td>--}}
                                {{--<td class="">--}}
                                    {{--<a href="{{url('projects/'.$show->id)}}"><button type="button" class="btn btn-info btn-sm" name="button"><span class="fa fa-info"></span> Detail</button></a>--}}
                                    {{--<a href="{{url('projects/'.$show->id.'/edit')}}"><button type="button" class="btn btn-success btn-sm" name="button"><span class="fa fa-edit"></span> Edit</button></a>--}}
                                    {{--@if ($show->status_id == 1)--}}
                                        {{--<a href="{{url('projects/'.$show->id.'/delete')}}"><button type="button" class="btn btn-danger btn-sm" name="button"><span class="fa fa-times"></span> Hapus</button></a>--}}
                                    {{--@endif--}}
                                    {{--<a href="{{route('projects/print',$show->id)}}"><button type="button" class="btn btn-sm btn-warning" name="button"><span class="glyphicon glyphicon-print"></span> Print</button></a>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                    </tbody>
                </table>
            </div>


        </div>
        <!-- /.col-lg-12 -->

        <script>
            $(document).ready(function() {
                $('#customer_projects_table').DataTable({
                    responsive: true,
                    order: [[5, "desc"]]
                });
            });
        </script>

@endsection
