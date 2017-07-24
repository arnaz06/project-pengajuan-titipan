@extends('base')

@section('title')
    Detail Pengajuan
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
            <a onclick="window.history.back()"><button type="button" class="btn btn-default btn-sm" name="button"><span class="fa fa-chevron-left "></span> Kembali </button></a>
            <a href="{{url('/pengajuan/'.$pengajuan->id.'/edit')}}"><button type="button" class="btn btn-success btn-sm" name="button"><span class="fa fa-edit"></span> Edit</button></a>
            <a href="{{url('/pengajuan/'.$pengajuan->id.'/delete')}}"><button type="button" class="btn btn-danger btn-sm" name="button"><span class="fa fa-times"></span> Hapus</button></a>
            <a href="{{url('pengajuan/print/'.$pengajuan->id)}}"><button type="button" class="btn btn-primary btn-sm" name="button"><span class="fa fa-edit"></span> Print</button></a>

        </div>
    </div>


    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{url('pengajuan/'.$pengajuan->id.'/barang/create')}}">
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
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($barangs->where('id_pengajuan',$pengajuan->id) as $barang)
                            <tr>
                                <td>{{ $barang->kdBarang }}</td>
                                <td>{{$barang->nama}}</td>
                                <td>{{$barang->hrg_satuan}}</td>
                                <td>{{$pengajuan->no_pengajuan}}</td>
                                <td class="">
                                    <a href="{{url('barang/'.$barang->id.'/edit')}}"><button type="button" class="btn btn-success btn-sm" name="button"><span class="fa fa-edit"></span> Edit</button></a>
                                    <a href="{{url('barang/'.$barang->id.'/delete')}}"><button type="button" class="btn btn-danger btn-sm" name="button"><span class="fa fa-times"></span> Hapus</button></a>
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
