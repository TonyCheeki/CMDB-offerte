@extends('includes\layout')

@section('content')
<div class=" container  p-2" style="margin-top:30px;">
    <div class="row mt-3" id="">
        <div class="col-md-12">
            <div class="card " style="width: 100%;">
                <div class="card-body shadow">  
                    <ol>
                        <table id="myTable" class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">description</th>
                                <th scope="col">img-1</th>
                                <th scope="col">img-2</th>
                                <th scope="col">img-3</th>
                                <th scope="col">img-4</th>
                                <th scope="col">Created_at</th>
                                <th scope="col">Updated_at</th>
                                <th scope="col">Edit content</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr id="">
                                    
                                        <td scope="row">{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td>{{$product->updated_at}}</td>
                                        <td class="float-center"><a href=""> <span class="far fa-edit float-right" style="margin:5px;"></span></a></td>
                                    
                                </tr>
                                @endforeach           
                            </tbody>
                        </table>
                    </ol>
                </div>
            </div>
        </div>   
    </div>
</div>
@stop