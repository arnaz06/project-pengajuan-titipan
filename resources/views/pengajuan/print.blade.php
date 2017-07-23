<!DOCTYPE html>
<html>
<head>
    <title>Receipt</title>
    <style type="text/css">
        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .table-striped > tbody > tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
<div class="container">
    <div style="float: left;">No Pengajuan : {{$pengajuan->no_pengajuan}}</div><br>
    <div style="float: left;">Kode Unit : {{$unit->kdUnit}}</div><br>
    <div style="float: left;">Jumlah Pengajuan : {{$pengajuan->jml_pengajuan}}</div>
    <h2 style="text-align: center;">Pengajuan</h2>
    <table class="table-striped" width="100%">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga Satuan</th>
            <th>Jenis Barang</th>
        </tr>
        @foreach($barangs as $barang)
            <tr>
                <td>{{$barang->kdBarang}}</td>
                <td>{{$barang->nama}}</td>
                <td>{{$barang->hrg_satuan}}</td>
                <td>{{$barang->jenis_barang}}</td>
            </tr>
        @endforeach

    </table>
    <br>
    {{--<p align="right">Sudah terbayar pada {{ \Carbon\Carbon::parse($receipts->receipt->payment_date)->format('d F Y') }}<br>--}}
        {{--Nomor receipt {{$receipts->receipt->receipt_number}}</p>--}}

</div>
</body>
</html>