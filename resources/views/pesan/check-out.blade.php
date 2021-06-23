@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- btn kembali -->
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"> Back</i></a>
                </ol>
            </nav> 
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                 <h3><i class="fa fa-shopping-cart">Check Out</i></h3>
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
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1 ?>
                            @foreach($pesanan_detail as $pesanan_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                <td>{{ $pesanan_detail->jumlah }} Kain</td>
                                <td align="left">Rp. {{ number_format($pesanan_detail->barang->harga)}}</td>
                                <td align="left">Rp. {{ number_format($pesanan_detail->jumlah_harga)}}</td>
                                <td>
                                    <form action="{{ url('check-out') }}/{{ $pesanan_detail->id }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" type="submit" 
                                        onClick="return confirm('Apa Anda Yakin Ingin Menghapus data ?');"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="4" align="right"><strong>Total Harga : </strong></td>
                                <td><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                                <td>
                                    <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success" onClick=" 
                                    return confirm('Apa Anda Yakin Ingin Check Out?');">Check Out</a>
                                </td>
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
