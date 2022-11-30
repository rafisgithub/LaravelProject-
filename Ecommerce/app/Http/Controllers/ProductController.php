<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $product,$image,$imageName,$directory,$imgUrl;
    public function addProduct(){
        return view('admin.product.add-product');
    }
    public function saveProduct(Request $request){
       $this->product= new Product();
       $this->product->product_name=$request->product_name;
       $this->product->brand_name=$request->brand_name;
       $this->product->category_name=$request->category_name;
       $this->product->product_price=$request->product_price;
       $this->product->description=$request->description;
       $this->product->image=$this->saveImage($request);
       $this->product->save();
       return back()->with('message','Product added successfully');
    }
    private function saveImage($request){
        $this->image=$request->file('image');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory='adminAsset/upload/product-image/';
        $this->imgUrl=$this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }
    public function manageProduct(){
        return view('admin.product.manage-product',[
           'products'=> Product::all()
        ]);
    }
    public function status($id){
       $this->product= Product::find($id);
      if($this->product->status==1){
          $this->product->status=0;
          $this->product->save();
          return back();
      }else{
          $this->product->status=1;
          $this->product->save();
          return back();
      }
    }
    public function deleteProduct(Request $request){
       $this->product= Product::find($request->product_id);
        unlink($this->product->image);
         $this->product->delete();


       return back();
    }
    public function edit($id){
        $this->product=Product::find($id);
        return view('admin.product.edit-product',[
            'product'=>$this->product
        ]);

    }
    public function updateProduct(Request $request){
        $this->product=Product::find($request->product_id);
        $this->product->product_name=$request->product_name;
        $this->product->brand_name=$request->brand_name;
        $this->product->category_name=$request->category_name;
        $this->product->product_price=$request->product_price;
        $this->product->description=$request->description;
        if($request->file('image')){
            unlink($this->product->image);
        }else{
            $this->product->image=$this->saveImage($request);
        }

        $this->product->save();
        return redirect('manage-product')->with('message','Product Update successfully');
    }

}
