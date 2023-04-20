<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSize;
use Illuminate\Http\Request;

class WebController extends Controller
{
   public function products()
   {

    $data=Product::all();

    $productSizes=ProductSize::all();
   return view('front.store',compact("data","productSizes"));

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
