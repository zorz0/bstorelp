<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

use App\Models\User;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{     
    public function index()
    {

      $orders = Order::orderBy('id', 'DESC')->get()->take(5);
      
      $products = Product::join('product_size', 'products.id', '=', 'product_size.product_id')
      ->orderBy('products.id', 'desc')->take(5)
      ->get();
      $users = User::orderBy('id', 'DESC')->get()->take(5);

      $Allproducts = Product::join('product_size', 'products.id', '=', 'product_size.product_id')
      ->orderBy('products.id', 'desc')
      ->get();

      return view('admin.index',['orders' => $orders,'products'=>$products,'Allproducts'=>$Allproducts,'users'=>$users]);


    }
}
