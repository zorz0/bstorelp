<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class Cardcontroller extends Controller
{
    public function totalCards(){


        $data = auth()->user()->cards()->where('order_id', null)->get();

        $total=0;

        foreach($data as $totalPricecard){

            $total+= $totalPricecard['totalprice'];
        }


        return view('front.totalCards',compact('data',"total"));
    }



    public function store(Request $request){

             $totalPrice=$request->price*$request->quantity;

        Card::create([
            "user_id"=>$request['user_id'],
            "productSize_id"=>$request['productSize_id'],
            "product_id"=>$request['product_id'],
            "quantity"=>$request['quantity'],
            "price"=>$request['price'],
            "totalprice"=>$totalPrice

        ]);

        return redirect(route('store'));
    }

    public function update(Request $request ,$id){


        // $price = $request->input('price');
        $quantity = $request->input('quantity');

        // $data=auth()->user()->cards;

        $card= Card::find($id);

        $total=$quantity*$card->price;
           $card->update([
                //    "user_id"=>$request['user_id'],
                //    "productSize_id"=>$request['productSize_id'],
                //    "product_id"=>$request['product_id'],
                   "quantity"=>$request['quantity'],
                //    "price"=>$request['price'],
                   "totalprice"=>$total,



           ]);

           return back();


    }

 public function destroy($id){

    Card::find($id)->delete();

    return back();
 }



}
