@extends('includes/layout')

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
                                <th scope="col">Created_at</th>
                                <th scope="col">Updated_at</th>
                                <th scope="col">Edit content</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="">
                                    @foreach($pages as $page)
                                        <td scope="row"></td>
                                        <td>{{$page->name}}</td>
                                        <td>{{$page->description}}</td>
                                        <td>{{$page->created_at}}</td>
                                        <td>{{$page->updated_at}}</td>
                                        <td class="float-center"><a href="{{route('page.edit', ['id' => $page->id])}}"> <span class="far fa-edit float-right" style="margin:5px;"></span></a></td>
                                    @endforeach
                                </tr>           
                            </tbody>
                        </table>
                    </ol>
                </div>
            </div>
        </div>   
    </div>
</div>
@stop