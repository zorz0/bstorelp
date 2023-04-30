<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Card;
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
              ->get()->take(3)
              ->map(function ($product) {
                  $product->sizes = DB::table('product_size')
                      ->where('product_id', $product->id)
                      ->orderByDesc('id')
                        ->take(3)
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
    
    $allMostProduct = Card::select('product_id')
    ->whereNotNull('order_id')
    ->groupBy('product_id')
    ->orderByRaw('COUNT(*) DESC')
    ->take(4)
    ->get();

$allMostProduct->each(function ($mostProduct) {
    // Get the product data for this most popular product
    $productData = DB::table('products')
        ->where('id', $mostProduct->product_id)
        ->get();
        
    
  
    $mostProduct->productData = $productData;
});



    return view('front.store', [
      'categories'=>$categories,
      'allMostProduct'=>$allMostProduct
    
  ]);
  
   }


   public function showProduct(Request $request, $id)
   {

    $data=Product::find($id);

    $dataImages=ProductImage::where('product_id',$data->id)->get();
    $id = request('id');

     $productSize=ProductSize::find($id);
    
   return view('front.AddTocard',compact("data","dataImages","productSize"));

   }

   public function getPriceSize($id){

    $data=Product::find($id);
    $dataImages=ProductImage::where('product_id',$data->id)->get();

    $productPriceSize=ProductSize::where('id',$data->id)->get();


   }
   public function allproduct(){
    $id = request('id');
$allProduct = DB::table('products')->where('category_id', $id)->get();

return view('front.AllProduct', [
    'allProduct'=>$allProduct

]);

   }



}