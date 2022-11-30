@extends('adminFrontEnd.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <h3 class="text-center">{{session('message')}}</h3>
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product Form</h3></div>
                    <div class="card-body">
                        <form action="{{route('new-product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" name="product_name" type="text" placeholder="Enter product name" />
                                        <label for="inputFirstName">Product Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="categoryName" name="category_name" type="text" placeholder="Category Name" />
                                        <label for="categoryName">Category Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="brand_name" id="brandName" type="text" placeholder="Brand Name" />
                                        <label for="brandName">Brand Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" name="product_price" type="text" placeholder="Enter product price" />
                                        <label for="inputFirstName">Product Price</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <textarea type="text" id="description" name="description" placeholder="Description" class="form-control"></textarea>
                                        <label for="description">Description</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid"><input type="submit" value="Submit" class="btn btn-outline-info"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
