<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductSize;
use Illuminate\Http\Request;

class ProductSizeController extends Controller
{
   public function index(){

   }

   public function create($id){

    $products=Product::find($id);

    return view('admin.products.addproductSize',compact('products'));
   }

   public function store(Request $request){

    $ProductSize=ProductSize::create([
        "product_id"=>$request['product_id'],
        "size"=>$request['size'],
        "quantity"=>$request['quantity'],
        "price"=>$request['price'],
        "discount"=>$request['discount'],



    ]);


    return redirect('dashboard/product');

   }


}
