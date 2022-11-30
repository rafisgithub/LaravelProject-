<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{

    public function index(){
        return view('frontEnd.home.home',[
           'products'=> Product::where('status',1)->get()
//           'products'=> Product::where('status',1)->orderby('id','desc')->skip(1)->take(2)->get()
        ]);
    }
    public function shopPage(){
        return view('frontEnd.product.shop-page');
    }
    public function singleProduct(){
        return view('frontEnd.product.single-product');
    }
    public function card(){
        return view('frontEnd.product.card');
    }
    public function checkOut(){
        return view('frontEnd.product.check-out');
    }
    public function productDetails($id){
        return view('frontEnd.product.product-details',[
            'product'=>Product::find($id)
        ]);
    }
}
