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
                 <h3><i class="fa fa-shopping-cart">History Check Out</i></h3>
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Jumlah Harga</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1;?>
                        @foreach($pesanan as $pesanan)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $pesanan->tanggal }}</td>
                            <td>
                                @if($pesanan->status == 1)
                                    Belum bayar
                                @else
                                    Sudah dibayar
                                @endif
                            </td>
                            <td>Rp. {{ number_format($pesanan->jumlah_harga+$pesanan->kode) }}</td>
                            <td>
                                <a href="{{ url('history') }}/{{ $pesanan->id }}" 
                                class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
