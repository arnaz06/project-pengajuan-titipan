@extends('base')

@section('title')
    Detail Unit
@endsection

@section('body')
    <div class="row">
        <div class="col-sm-3">
            Nama pengeluaran
        </div>
        <div class="col-sm-6">
            <p>
                : {{ $unit->nama }}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            Deskripsi
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
            <a href="{{url('/unit/'.$unit->id.'/edit')}}"><button type="button" class="btn btn-success" name="button"><span class="fa fa-edit"></span> Edit</button></a>
            <a href="{{url('/unit/'.$unit->id.'/delete')}}"><button type="button" class="btn btn-danger" name="button"><span class="fa fa-times"></span> Hapus</button></a>
        </div>
    </div>


    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{url('unit/'.$unit->id.'/pengajuan/create')}}">
                    <button type="button" class="btn btn-success" name="button">
                        <span class="fa fa-plus"></span> Tambah
                    </button>
                </a>
            </div>
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="customer_projects_table">
                    <thead>
                    <tr>
                        <th>Nomer Pengajuan</th>
                        <th>Jumlah Pengajuan</th>
                        <th>Kode Unit</th>
                        <th>ACC</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pengajuans as $pengajuan)
                        <tr>
                            <td>{{ $pengajuan->no_pengajuan }}</td>
                            <td>{{$pengajuan->jml_pengajuan}}</td>
                            <td>{{$unit->kdUnit}}</td>
                            <td>{{$pengajuan->acc}}</td>
                            <td class="">
                                <a href="{{url('/pengajuan/'.$pengajuan->id.'/detail')}}"><button type="button" class="btn btn-info" name="button"><span class="fa fa-info"></span> Detail</button></a>
                                <a href="{{url('/pengajuan/'.$pengajuan->id.'/edit')}}"><button type="button" class="btn btn-success" name="button"><span class="fa fa-edit"></span> Edit</button></a>
                                <a href="{{url('/pengajuan/'.$pengajuan->id.'/delete')}}"><button type="button" class="btn btn-danger" name="button"><span class="fa fa-times"></span> Hapus</button></a>
                            </td>
                        </tr>
                    @endforeach
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
