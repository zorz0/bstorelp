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
        
        $sizes = DB::table('product_size')
            ->where('id', $mostProduct->product_id)
            ->get();
    
        if ($sizes->isEmpty()) {
            $mostProduct->sizes = [['null']];
        } else {
            $mostProduct->sizes = $sizes;
        }
    
        $mostProduct->productData = $productData;
    });
    
    

$ProductWithoutSugar= DB::table('products')
->where('id', "1")->take(4)
->get();

    return view('front.store', [
      'categories'=>$categories,
      'allMostProduct'=>$allMostProduct,
    'ProductWithoutSugar'=>$ProductWithoutSugar
  ]);

   }


   public function showProduct(Request $request, $id)
   {
    $id = rand(1, 3);
    $categories = DB::table('categories')->where('id', $id)->get();


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
                    $product->sizes[0] = "null";
                }
                return $product;
            });
        return $category;
    });
    $id = request('id');

    $data=Product::find($id);

    $dataImages=ProductImage::where('product_id',$data->id)->get()->take(4);

     $productSize=ProductSize::find($id);
     $allProduct = DB::table('products')->take(3)->get();
     $allProduct->map(function ($product) {
         $product->sizes = DB::table('product_size')
             ->where('product_id', $product->id)
             ->orderByDesc('id')
             ->take(3)
             ->get();
     
             if ($product->sizes->isEmpty()) {
                 $product->sizes[0] ="null";
             }
         return $product;
            });
   return view('front.AddTocard',compact("data","dataImages","productSize","categories","allProduct"));

   }

   public function getPriceSize($id){

    $data=Product::find($id);
    $dataImages=ProductImage::where('product_id',$data->id)->get();

    $productPriceSize=ProductSize::where('id',$data->id)->get();


   }
   public function allproduct(){
    $id = request('id');
    $allProduct = DB::table('products')->where('category_id', $id)->get();
    $allProduct->map(function ($product) {
        $product->sizes = DB::table('product_size')
            ->where('product_id', $product->id)
            ->orderByDesc('id')
            ->take(3)
            ->get();
    
            if ($product->sizes->isEmpty()) {
                $product->sizes[0] ="null";
            }
        return $product; // Add this line to return the modified $product object
    });
    
return view('front.AllProduct', [
    'allProduct'=>$allProduct

]);

   }



}