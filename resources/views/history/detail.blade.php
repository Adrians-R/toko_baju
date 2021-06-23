@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- btn kembali -->
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <a href="{{ url('history') }}" class="btn btn-primary"><i class="fa fa-arrow-left"> Back</i></a>
                </ol>
            </nav> 
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Seukses Check Out</h3>
                    <h5>Pesanan anda sudah sukses dicheck out selanjutnya untuk pembayran silahkan transfer
                    <br>direkening<strong>Bank BRI Nomor Rekening : 3222-768808-954</strong></h5>
                    <br>dengan nominal :<strong>Rp. {{ number_format($pesanan->kode+$pesanan->jumlah_harga) }}</strong>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                 <h3><i class="fa fa-shopping-cart">Detail Pesanan</i></h3>
                 @if(!empty($pesanan))
                 <p align="right">Tanggal Pesanan : {{ $pesanan->tanggal }}</p>
                    <table class="table table-striped">
                        <thead> 
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Todal Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1 ?>
                            @foreach($pesanan_detail as $pesanan_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                <td>{{ $pesanan_detail->jumlah }} Kain</td>
                                <td align="right">Rp. {{ number_format($pesanan_detail->barang->harga)}}</td>
                                <td align="right">Rp. {{ number_format($pesanan_detail->jumlah_harga)}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="4" align="right"><strong>Total Harga : </strong></td>
                                <td align="right"><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                            </tr>
                            <tr>
                                <td colspan="4" align="right"><strong>Kode :</strong></td>
                                <td align="right"><strong>Rp. {{ number_format($pesanan->kode) }}</strong></td>
                            </tr>
                            <tr>
                                <td colspan="4" align="right"><strong>Sub Total :</strong></td>
                                <td align="right"><strong>Rp. {{ number_format($pesanan->kode+$pesanan->jumlah_harga) }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
