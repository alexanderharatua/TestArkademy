@extends('layouts.master')

@section('page_title')
    Arkademy Test
@endsection

@section('content')
  
<form action="/admin/products" method="POST">
    @csrf
        <div class="form-group">
        <label for="name">Item name:</label>
        <input type="text" class="form-control" placeholder="Masukkan Nama Produk" name="nama_produk" id="nama_produk">
        </div>
        <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" class="form-control" placeholder="Description" name="keterangan" id="keterangan">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" placeholder="Price" name="harga" id="harga">
            </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="text" class="form-control" placeholder="Jumlah" name="jumlah" id="jumlah">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection