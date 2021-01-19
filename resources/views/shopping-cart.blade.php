@extends('includes/layout')
<title>Shoppingcart</title>
@section('content')
<div class="container" style="display: flex;">
    @if(Session::has('cart'))
    <div class="row" style="width: 900px;">
        <div class="col-sm-12 col-md-12">
            <ul class="list-group">
                @foreach($products as $product)
                <div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                    <div class="media d-block d-sm-flex text-center text-sm-left">
                        <a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="{{asset('img/product_frame.png')}}" alt="Product"></a>
                        <div class="media-body pt-3">
                            <h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#">{{$product['item']->name}}</a></h3>
                            <div class="font-size-sm"><span class="text-muted mr-2">Quantity: </span>{{$product['qty']}}</div>
                            <div class="font-size-lg text-primary pt-2">€{{$product['price']}}</div>

                            <div class="quantity" style="display: flex">
                                <a href="{{ route('increase', ['id' => $product['item']['id']]) }}"><button class="btn btn-outline-success btn-sm mb-2" type="button" style="margin:auto;"><i class="fas fa-plus"></i></button></a>
                                <a href="{{ route('reduce', ['id' => $product['item']['id']]) }}"><button class="btn btn-outline-warning btn-sm mb-2" type="button" style="margin:auto;"><i class="fas fa-minus"></i></button></a>
                                <a href="{{ route('remove', ['id' => $product['item']['id']]) }}"><button class="btn btn-outline-danger btn-sm mb-2" type="button" style="margin:auto;"><i class="far fa-trash-alt"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="col-xl-3 col-md-4 pt-3 pt-md-0 sidebar">
                <h2 class="h6 px-4 py-3 bg-secondary text-center">Total</h2>
                <div class="h3 font-weight-semibold text-center py-3">€{{$totalPrice}}</div>
                <hr>
                <h3 class="h6 pt-4 font-weight-semibold"><span class="badge badge-success mr-2">Note</span>Additional
                    comments</h3>
                <textarea class="form-control mb-3" id="order-comments" rows="5"></textarea>
                <a class="btn btn-primary btn-block" href="{{ route('checkout') }}"><i class="far fa-credit-card"></i> Proceed to Checkout</a>
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