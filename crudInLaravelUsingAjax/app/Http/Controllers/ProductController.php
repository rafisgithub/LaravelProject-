<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ProductController extends Controller
{
    public function product(){
        return view('products');
    }
    //add product
    // public function addProduct(Request $request){
    //     $request->validate(
    //         [
    //           'name'=>'required|unique:products',
    //           'price'=>'required|unique:products',
    //         ],
    //         [
    //             'name.requred'=>'Name is Required',
    //             'name.unique'=>'Product already exists',
    //             'price.requred'=>'price is Required',
    //         ]
    //         );
    // }
}
