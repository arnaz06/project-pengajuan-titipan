@extends('base')

@section('title')
    Pengadaan
@endsection

@section('head')
    {{ HTML::style('/vendor/datatables-plugins/dataTables.bootstrap.css') }}
    {{ HTML::style('/vendor/datatables-responsive/dataTables.responsive.css') }}
    {{ HTML::script('/vendor/datatables/js/jquery.dataTables.min.js') }}
    {{ HTML::script('/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}
    {{ HTML::script('/vendor/datatables-responsive/dataTables.responsive.js') }}
@endsection

@section('body')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{url('pengadaan/create/')}}">
                <button type="button" class="btn btn-success" name="button">
                    <span class="fa fa-plus"></span> Tambah
                </button>
            </a>
        </div>
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="customer-table">
                <thead>
                <tr>
                    <th>Nomer Pengadaan</th>
                    <th>Nomer Pengajuan</th>
                    <th>Jumlah Pengadaan</th>
                    <th>Acc</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pengadaans as $pengadaan)
                    <tr>
                        <td>{{ $pengadaan->no_pengadaan }}</td>
                        @foreach($pengajuans->where('id',$pengadaan->id_pengajuan) as $pengajuan)
                        <td>{{ $pengajuan->no_pengajuan }}</td>
                        @endforeach
                        <td>{{$pengadaan->jml_pengadaan}}</td>
                        <td>{{$pengadaan->acc}}</td>
                        <td class="">
                            <a href="{{url('/pengajuan/'.$pengadaan->id.'/detail')}}"><button type="button" class="btn btn-info" name="button"><span class="fa fa-info"></span> Detail</button></a>
                            <a href="{{url('/pengajuan/'.$pengadaan->id.'/edit')}}"><button type="button" class="btn btn-success" name="button"><span class="fa fa-edit"></span> Edit</button></a>
                            <a href="{{url('/pengajuan/'.$pengadaan->id.'/delete')}}"><button type="button" class="btn btn-danger" name="button"><span class="fa fa-times"></span> Hapus</button></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#customer-table').DataTable({
                responsive: true
            });
        });
    </script>
@stop