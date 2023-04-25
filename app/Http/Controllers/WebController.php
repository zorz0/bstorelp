<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
   public function products()
   {
      $categories = DB::table('categories')->get();

      $categories->map(function ($category) {
          $category->products = DB::table('products')
              ->where('category_id', $category->id)
              ->get()
              ->map(function ($product) {
                  $product->sizes = DB::table('product_size')
                      ->where('product_id', $product->id)
                      ->get()
                      ->toArray();
                  if (empty($product->sizes)) {
                      $product->sizes = ['null'];
                  }
                  return $product;
              });
          return $category;
      });
      
     
  

  

    $data=Product::all()->take(3);

    $productSizes=ProductSize::all();
    return view('front.store', [
      'categories'=>$categories
 
  ]);
  
   }


   public function showProduct(Request $request, $id)
   {

    $data=Product::find($id);

    $dataImages=ProductImage::where('product_id',$data->id)->get();

    $productSize=ProductSize::find($request->productSizeId);

   return view('front.AddTocard',compact("data","dataImages","productSize"));

   }

   public function getPriceSize($id){

    $data=Product::find($id);
    $dataImages=ProductImage::where('product_id',$data->id)->get();

    $productPriceSize=ProductSize::where('id',$data->id)->get();


   }



}
