<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\User;


use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;


class OrderController extends Controller
{
public function index(){
    $orders=Order::paginate(6);
    return view('admin.Orders.allOrders',['orders'=>$orders]);
}
public function create(){
    $users=User::all();
    $products=Product::all();
    $ProductSizes=ProductSize::all();
    return view('admin.Orders.addOrder',['users'=>$users,
    'products'=>$products,
'ProductSizes'=>$ProductSizes]);
}


public function createorder (Request $request){

  $data=auth()->user()->cards;
  $totalprice=$request->totalprice;
// $shipingPrice=Order::
    return view('front.orderStore',compact('data','totalprice'));
}

public function store (Request $request){


$data=Order::create([
    "user_id"=>$request["user_id"],
    "total_price"=>$request["total_price"],
    "address"=>$request["address"],
    "phone"=>$request["phone"],
    "name"=>$request["name"],
    "postal_code"=>"00",
    "shipping_price"=>$request["shipping_price"],


]);
$Order_id = $data->id;


$cards = auth()->user()->cards()->where('order_id', null)->get();
foreach ($cards as $card) {
    $card->order_id = $Order_id;
    $card->save();
}
   $message = trans('orders_.messages.order_register_success');
   Alert::success($message);

 return redirect(route('home'));

}

public function updateStatus( $id,$status){


    $order=Order::find($id);

    $order->update([
        'status'=>$status
    ]);
    $message = trans('orders_.messages.status_changed');
    Alert::success($message);

return back();

}
public function storeDashboardOrder (Request $request){


$data=Order::create([
    "user_id"=>$request["user_id"],
    "total_price"=>$request["total_price"],
    "address"=>$request["address"],
    "phone"=>$request["phone"],
    "name"=>$request["name"],
    "postal_code"=>$request["postal_code"],
    "shipping_price"=>$request["shipping_price"],


]);
return redirect(route('orders.index'));

}

}
