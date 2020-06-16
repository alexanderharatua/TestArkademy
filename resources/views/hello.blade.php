@extends('layouts.master')

@section('page_title')
    Arkademy Test
@endsection

@section('content')
    <h3> Welcome </h3>
    <a href="/admin/products/"> 
        <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i>Show Product</button>
      </a>
@endsection