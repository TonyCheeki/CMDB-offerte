@extends('includes/layout')

@section('content')
<!-- <div class='container'>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
<form method="post" action="{{ route('update' , ['id' => $product->id])}}">
    @csrf
<div class="form-group">
    <label for="exampleFormControlInput1">Product name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$product->name}}" placeholder="{{$product->name}}" required autofocus>
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Product description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"  value="{{$product->description}}" placeholder="{{$product->description}}" required autofocus>{{$product->description}}</textarea>
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Product price:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$product->name}}" placeholder="{{$product->name}}" required autofocus>
</div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">update section</button>
</form> -->

<head>
  <title>Laravel 7 Multiple File Upload Example | Codechief </title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="3.3.6/css/bootstrap.min.css">
</head>
<body>


<div class="container lst">


@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
</div>
@endif


@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div> 
@endif


<h3 class="well">Laravel 7 Multiple File Upload | Codechief </h3>
<form method="post" action="{{route('file.store',['id' => $product->id])}}" enctype="multipart/form-data">
  {{csrf_field()}}
    <input  name="product_id" type="hidden" value="{{$product->id}}">
    <div class="input-group hdtuto control-group lst increment" >
    <input type="file" name="thumbnail[]" class="myfrm form-control">
    <div class="input-group-btn"> 
        <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
    </div>
    </div>
    <div class="clone hide">
    <div class="hdtuto control-group lst input-group" style="margin-top:10px">
        <input type="file" name="thumbnail[]" class="myfrm form-control">
        <div class="input-group-btn"> 
        <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
        </div>
    </div>
    </div>


    <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>


</form>        
</div>


<script type="text/javascript">
    $(document).ready(function() {
    $(".btn-success").click(function(){ 
        var lsthmtl = $(".clone").html();
        $(".increment").after(lsthmtl);
    });
    $("body").on("click",".btn-danger",function(){ 
        $(this).parents(".hdtuto control-group lst").remove();
    });
    });
</script>


</body>



</div>
@stop