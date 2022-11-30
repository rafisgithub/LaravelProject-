@extends('admin.master')
@section('title')
    Manage Product
@endsection
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 text-center">Manage Products</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Products</li>
            </ol>

            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Product Name</th>
                            <th>Brand Name</th>
                            <th>Category Name</th>
                            <th>Product price</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1; @endphp
                        @foreach($products as $product)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->brand_name}}</td>
                            <td>{{$product->category_name}}</td>
                            <td>{{$product->product_price}}</td>
                            <td><img src="{{asset($product->image)}}" alt="" style="height: 50px;width: 50px"></td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->status==1?'published':'Unpublished'}}</td>
                            <td class="d-flex">
                                @if($product->status==1)
                                <a href="{{route('status',['id'=>$product->id])}}" class="btn btn-outline-primary" style="margin-left: 7px; color: #0a58ca">Unpublished</a>
                                @else
                                    <a href="{{route('status',['id'=>$product->id])}}" class="btn btn-outline-primary" style="margin-left: 7px;color: #0c4128">published</a>
                                @endif
                                    <a href="{{route('edit',['id'=>$product->id])}}" class="btn btn-outline-info" style="margin-left: 7px">Edit</a>
                                    <form action="{{route('delete-product')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <input type="submit" value="Delete" class="btn btn-outline-danger" style="margin-left: 7px" onclick="return confirm('Are you sure?')">
                                    </form>
                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

