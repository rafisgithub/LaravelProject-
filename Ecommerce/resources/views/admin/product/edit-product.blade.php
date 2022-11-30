@extends('admin.master')
@section('title')
    Add product
    @endsection
    @section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <h3 class="text-center">{{session('message')}}</h3>
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Product</h3></div>
                                <div class="card-body">
                                    <form action="{{route('update-product')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="ProductName" name="product_name" value="{{$product->product_name}}" type="text" placeholder="Product Name" />
                                            <label for="ProductName">Product Name</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" name="brand_name" value="{{$product->brand_name}}" type="text" placeholder="Brand Name" />
                                                    <label for="inputFirstName">Brand Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="CategoryName" name="category_name" value="{{$product->category_name}}" type="text" placeholder="Category Name" />
                                                    <label for="CategoryName">Category Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="ProductName" name="product_price" value="{{$product->product_price}}" type="text" placeholder="Product Price" />
                                            <label for="ProductName">Product Price</label>
                                        </div>
                                        <div class="form-floating mb-3">

                                            <textarea name="description" id="Description" cols="90" rows="7">{{$product->description}}</textarea>

                                        </div>
                                        <div class="form-floating mb-3">
                                            <img src="{{asset($product->image)}}" alt="" style="height: 50px;width: 50px">
                                            <input class="form-control" name="image" id="ProductName" type="file" />
                                        </div>

                                        <div class="text-center">
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <input type="submit" value="update Product" class="btn btn-outline-primary">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    </body>
    </html>

@endsection

