@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">{{ $product->nama_produk }}</div>
        <div class="card-body">{{ $product->keterangan }}</div>
        <div class="card-footer">{{ $product->harga }}</div>
    </div>
 
@endsection