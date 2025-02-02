@extends('layouts.template')

@section('title')
<div>
	<h2>Detail Pemesanan</h2>
</div>
@endsection

@section('content')
@include('layouts.errorAlert')
<button class="btn btn-primary">Tambah Custom</button>
<form action="{{ route('orderDetail.store') }}" method="POST">
    @csrf
    <input type="number" name="order_id" value="{{ $order->id }}" hidden>  
    <div class="form-group">
        <label>Produk</label>
        <select name="product_id" class="form-control">            
            @foreach ($products as $product)                                
                <option value="{{ $product->id }}">{{ $product->nama }}</option>                                
            @endforeach            
        </select>
    </div>
    <div class="form-group">
        <label>Kuantitas</label>
        <input type="number" class="form-control" name="kuantitas">        
    </div>
    <div class="form-group">
        <label>Metode Pengiriman</label>
        <select name="metode_pengiriman" class="form-control">            
            <option value="Diantar">Diantar</option>
            <option value="Diambil">Diambil</option>            
        </select>        
    </div>    
    <div class="form-group">
        <label>Pesan dari Customer</label>
        <textarea class="form-control" rows="3" name="pesan_customer" placeholder="Masukkan pesan"></textarea>
    </div>
    <a href="{{ route('kasir.index') }}"><button type="button" class="btn btn-outline-primary">Kembali</button></a>
    <button type="submit" class="btn btn-primary">Simpan Pesanan</button>
</form>
@endsection