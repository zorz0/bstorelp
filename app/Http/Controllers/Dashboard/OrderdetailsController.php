<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use App\Models\Order;

use App\Models\User;
use App\Models\Card;
use Illuminate\Http\Request;
use App\Models\ProductSize;
use App\Models\Product;

class OrderdetailsController extends Controller
{
    //


    public function getorder(Request $request, $id)
{
    $order = Order::find($id);
    $user = User::find($order->user_id);
    $cards = Card::where('order_id', $id)->get();
    
    $cardsWithProduct = $cards->map(function ($card) {
        $product_id = $card->product_id;
        $product_sizes = ProductSize::where('product_id', $product_id)->get();
        $product_name = Product::where('id', $product_id)->value('name'); // fetch the product name
        $card['product_sizes'] = $product_sizes;
        $card['product_name'] = $product_name; // add the product name to the card
        return $card;
    });
    
    
      return view('admin.Orders.oderdetails', [
        'order' => $order,
        'user' => $user,
        'cards' => $cards
    ]);
}

}
