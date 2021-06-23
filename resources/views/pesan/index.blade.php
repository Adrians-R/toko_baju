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
      
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('upload')}}/{{ $barang->gambar }}" width="80%"  alt="">
                        </div>
                        <div class="col-md-6 mt-5">
                             <h4>{{ $barang->nama_barang}}</h4>
                             <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($barang->harga) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td>{{ number_format($barang->stok) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{ $barang->keterangan }}</td>
                                    </tr>
                                    
                                        <tr>
                                            <td>Jumlah Pesan</td>
                                            <td>:</td>
                                            <td>
                                            <form action="{{ url('pesan') }}/{{ $barang->id }}" method="post">
                                            @csrf
                                                <input type="text" name="jumlah_pesan" class="form-control" required>
                                                <button type="submit" class="btn btn-lg btn-primary mt-3"><i class="fa fa-shopping-cart"></i></button>
                                            </td>
                                        </tr>
                                    </form>
                                </tbody>
                             </table>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection
