@extends('layouts.master')

@section('content')
<a href="/admin/products/create" class="btn btn-primary mb-2">Add new Produk</a>
<table class="table">
    <thead>
      <tr>
        <th>Nama Produk</th>
        <th>Keterangan</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{$product->nama_produk}}</td>

                <td>{{$product->keterangan}}</td>

                <td>{{$product->harga}}</td>

                <td>{{$product->jumlah}}</td>

                <td>
                <a href="/admin/products/{{ $product->id }}"> 
                  <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i>Show</button>
                </a>

                <a href="/admin/products/{{ $product->id }}/edit"> 
                  <button class="btn btn-success btn-sm"><i class="fas fa-edit"></i>Edit</button>
                </a>

                <form action="/admin/products/{{$product->id}}" method="POST" style="display: inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" value="delete"><i class="fa fa-trash"></i>delete</button>
                </form>
                  </td>
             </tr>
        @endforeach
    </tbody>
  </table>
@endsection