@extends('includes/layout')

@section('content')
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('update' , ['id' => $page->id])}}">
@csrf
<div class="form-group">
    <label for="exampleFormControlInput1">section name </label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$page->name}}" placeholder="{{$page->name}}" required autofocus>
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">section textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"  value="{{$page->description}}" placeholder="{{$page->description}}" required autofocus>{{$page->description}}</textarea>
</div>
<button type="submit" class="btn btn-primary btn-lg btn-block">update section</button>
</form>
</div>
@stop