@extends('includes\layout')
<title>Shoping cart</title>
@section('content')
<div class="container" >
        @if(Session::has('cart'))
            <div class="row">
                <div class="col-sm-12 col-md-12">
                <ul class="list-group">
                @foreach($products as $product)
                    <li class="list-group-item">
                    <span class=" float-left badge badge-pill badge-warning">{{$product['qty']}}</span>
                    <div style="max-height:50px; max-width:50px;">
                    <img src="{{$product['item']->img_url}}" class=" float-left img-responsive " style="margin:2px; max-height:50px; max-width:50px; "  alt="productfoto">
                    </div>
                    <strong class="float-left">{{$product['item']->name}}</strong>
                    <div style="float: right" class="btn-group">
                        <span class="label label-success">Prijs:€{{$product['price']}}</span>
                        <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                        <li><a href="{{ route('increase', ['id' => $product['item']['id']]) }}">+1</a></li>
                        <li><a href="{{ route('reduce', ['id' => $product['item']['id']]) }}">-1</a></li>
                        <li><a href="{{ route('remove', ['id' => $product['item']['id']]) }}"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    </li>
                @endforeach
                </ul>
                </div>
            </div>
            <div class="row">
                <div  class="col-12">
                <strong style="float: right; padding-top:5px;">Total:€ {{$totalPrice}}</strong>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-12">
                    <a href="{{ route('checkout') }}" type="button" class="btn btn-succes"><strong style="border: 1px solid black;padding: 5px; border-radius: 5px">Checkout</strong></a>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-sm-6 col-md-6">
                <h2>No Items in Cart!</h2>
                </div>
            </div>
        @endif
</div>
@stop
