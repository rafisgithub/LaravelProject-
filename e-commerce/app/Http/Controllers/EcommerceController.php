<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index(){
        return view('frontEnd.home.home',[
//           'products'=> Product::where('status',1)->orderBy('id','desc')->skip(1)->take(2)->get()
           'products'=> Product::where('status',1)->orderBy('id','desc')->skip(0)->take(5)->get()
        ]);
    }
    public function productDetails($id){
        return view('frontEnd.product.product-details',[
            'product'=>Product::find($id)
        ]);
    }

}
