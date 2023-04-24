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

      $products =DB::table('categories')
      ->select('categories.*', 'categories.name as category_name', 'products.name as product_name', 'products.price')
      ->join('products', 'categories.id', '=', 'products.category_id')
      ->get();

  

    $data=Product::all()->take(3);

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
