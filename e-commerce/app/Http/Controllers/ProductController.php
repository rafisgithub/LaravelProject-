<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use function League\Flysystem\Local\delete;

class ProductController extends Controller
{
    public $product,$image,$imgaeName,$directory,$imgUrl;
    public function addProduct(){
        return view('adminFrontEnd.product.add-product');
    }
    public function saveProduct(Request $request){
       $this->product= new Product();
       $this->product->product_name=$request->product_name;
       $this->product->category_name=$request->category_name;
       $this->product->brand_name=$request->brand_name;
       $this->product->product_price=$request->product_price;
       $this->product->description=$request->description;
       $this->product->image=$this->saveImage($request);
       $this->product->save();
       return back()->with('message','Product added successfully');
    }
    private function saveImage($request){
        $this->image=$request->file('image');
        $this->imgaeName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory='adminFrontEndAsset/product-image/';
        $this->imgUrl=$this->directory.$this->imgaeName;
        $this->image->move($this->directory,$this->imgaeName);
        return $this->imgUrl;
    }
    public function manageProduct(){
        return view('adminFrontEnd.product.manage-product',[
           'products'=> Product::all()
        ]);
    }
    public function status($id){
       $product= Product::find($id);
      if( $product->status==1){
          $product->status=0;
          $product->save();
          return back();
      }else{
          $product->status=1;
          $product->save();
          return back();
      }
    }
    public function deleteProduct(Request $request){
      $this->product= Product::find($request->product_id);
      if($this->product->image){
          unlink($this->product->image);
      }
      $this->product->delete();
      return back()->with('message','product deleted successfull');
    }
    public function editProduct($id){
        return view('adminFrontEnd.product.edit-product',[
           'product'=> Product::find($id)
        ]);
    }
    public function updateProduct(Request $request){
        $this->product=Product::find($request->product_id);

        $this->product->product_name=$request->product_name;
        $this->product->category_name=$request->category_name;
        $this->product->brand_name=$request->brand_name;
        $this->product->product_price=$request->product_price;
        $this->product->description=$request->description;
        if($request->file('image')){
            if($this->product->image){
                unlink($this->product->image);
            }
            $this->product->image=$this->saveImage($request);
        }


        $this->product->save();
        return redirect('manage-product')->with('message','Update successfully');

    }
}
