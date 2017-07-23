@extends('base')

@section('title')
    Unit
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
            <a href="{{url('unit/create')}}">
                <button type="button" class="btn btn-success" name="button">
                    <span class="fa fa-plus"></span> Tambah
                </button>
            </a>
        </div>
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="customer-table">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kode Unit</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($units as $unit)
                    <tr>
                        <td>{{ $unit->nama }}</td>
                        <td>{{ $unit->kdUnit }}</td>
                        <td class="">
                            <a href="{{url('/unit/'.$unit->id).'/detail'}}"><button type="button" class="btn btn-info" name="button"><span class="fa fa-info"></span> Detail</button></a>
                            <a href="{{url('/unit/'.$unit->id.'/edit')}}"><button type="button" class="btn btn-success" name="button"><span class="fa fa-edit"></span> Edit</button></a>
                            <a href="{{url('/unit/'.$unit->id.'/delete')}}"><button type="button" class="btn btn-danger" name="button"><span class="fa fa-times"></span> Hapus</button></a>
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