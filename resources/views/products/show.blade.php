<!-- Head -->
@extends('includes/layout')

@section('content')



<div class="container bootdey">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        @foreach($product->files as $file)   
                            @foreach($file->thumbnail as $key => $img)
                                @if(!empty($img))
                                    @if($key == 0)
                                    <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset("files/{$img}") }}" alt="">
                                    </div>
                                    @else
                                    <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset("files/{$img}") }}" alt="">
                                    </div>
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>
                        {{$product->name}}
                    </h2>
                    
                    <p>{{$product->description}}</p>
                    <div class="product_meta">
                        <span class="posted_in"> <strong>Categories:</strong> <a rel="tag" href="#">Jackets</a>, <a rel="tag" href="#">Men</a>, <a rel="tag" href="#">Shirts</a>, <a rel="tag" href="#">T-shirt</a>.</span>
                        <span class="tagged_as"><strong>Tags:</strong> <a rel="tag" href="#">mens</a>, <a rel="tag" href="#">womens</a>.</span>
                    </div>
                    <div class="m-bot15"> <strong>Price : </strong> <span class="pro-price">€{{$product->price}}</span></div>
                    <p>
                        <a href="{{route('addToCart', ['id' => $product->id])}}"><button class="btn btn-round btn-danger" type="button"><i class="fa fa-shopping-cart"></i> Add to Cart</button></a>
                    </p>
                </div>
            </div>
        </section>
    </div>
</div>

@stop