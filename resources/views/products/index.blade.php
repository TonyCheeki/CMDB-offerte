<!-- Head -->
@extends('includes\layout')
<title>CMDB-Offerte | Products</title>
<!-- Navbar -->
@extends('includes\navigation')
<!-- Page Content -->
@section('content')

<div class="container">

<div class="row">
  @foreach($products as $product)
  <div class="card float-left" style="width: 18rem;">
    <img class="card-img-top" src="/img/product_frame.png" alt="Card image cap">

    <div class="card-body">
      <h5 class="card-title">{{$product->name}}</h5><p class="card-title">€{{$product->price}}</p>
      <p class="card-text">{{$product->description}}</p>
      <a href="/product/{{ $product->id }}" class="btn btn-primary">product bekijken</a>
    </div>
  </div>
  @endforeach
</div>
@stop
<!-- Footer -->
@extends('includes\footer')