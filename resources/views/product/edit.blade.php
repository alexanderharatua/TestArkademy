@extends('layouts.master')

@section('content')

        <form action="/admin/products/{{$product->id}}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                <label for="name">Item name:</label>
                <input type="text" class="form-control" placeholder="Masukkan email" name="nama_produk" id="nama_produk" value="{{$product->nama_produk}}">
                </div>
                <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" placeholder="Description" name="keterangan" id="keterangan" value="{{$product->keterangan}}">
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                <input type="text" class="form-control" placeholder="Price" name="harga" id="harga" value="{{$product->harga}}">
                    </div>
                <div class="form-group">
                    <label for="stock">Stock:</label>
                <input type="text" class="form-control" placeholder="Stock" name="jumlah" id="jumlah" value="{{$product->jumlah}}">
                </div>
                <button type="submit" class="btn btn-default">Update</button>
            </form>

@endsection