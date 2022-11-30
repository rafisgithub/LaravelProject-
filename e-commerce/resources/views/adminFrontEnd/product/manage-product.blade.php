@extends('adminFrontEnd.master')
@section('content')
    <div class="container-fluid px-4 pt-5">

        <div class="card mb-4">

            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Product Name:</th>
                        <th>Category Name</th>
                        <th>Brand Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($products as $product)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->category_name}}</td>
                            <td>{{$product->brand_name}}</td>
                            <td>{{$product->product_price}}</td>
                            <td>
                                <img src="{{$product->image}}" alt="" style="height: 60px;width: 60px">
                            </td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->status==1?'published':'unpublished'}}</td>
                            <td class="d-flex">
                                @if($product->status==1)
                                    <a href="{{route('status',['id'=>$product->id])}}" class="btn btn-outline-warning  " style="margin-right: 7px">Unpublished</a>
                                @else
                                    <a href="{{route('status',['id'=>$product->id])}}" class="btn btn-outline-primary" style="margin-right: 7px">Publish</a>
                                @endif
                                <a href="{{route('edit-product',['id'=>$product->id])}}" class="btn btn-outline-success" style="margin-right:7px;"><i class="fa fa-pencil"></i></a>

                                <form action="{{route('delete-product')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>

                            <td>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
