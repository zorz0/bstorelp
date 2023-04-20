<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use App\Models\Order;

use App\Models\User;
use Illuminate\Http\Request;

class OrderdetailsController extends Controller
{
    //


    public function getorder(Request $request, $id)
    {
        $order = Order::find($id);
    
        // Get the user associated with the order
        $user = User::find($order->user_id);
    
        // Pass the order and user data to the view
        return view('admin.Orders.oderdetails', [
            'order' => $order,
            'user' => $user
        ]);
    }
    
}
