<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\isNull;

class ProductController extends Controller
{
    public function index(){

    $data=Product::paginate(7);

  return view('admin.products.allProducts',compact('data'));

 }


 public function create(){


$Category=Category::all();
    return view('admin.products.addProducts',compact('Category'));

     }



 public function store(Request $request){


        $request['image']->storeAs("public/img",$request['image']->getClientOriginalName());
        $imgname= $request['image']->getClientOriginalName();

        $product=Product::create([
            "name"=>$request['name'],
            'name_english'=>$request["name_english"],
            "description"=>$request['description'],
            "description_english"=>$request['description_english'],

            "Alldescription"=>$request['Alldescription'],
            "Alldescription_english"=>$request['Alldescription_english'],

            "price"=>$request['price'],
            "discount_price"=>$request['discount_price'],
            "image"=>$imgname,
            "category_id"=>$request['category_id'],

        ]);

        // dd($request['productimages']);

       if(!empty($request['productimages'])){

          foreach($request['productimages'] as $image){

            $image->storeAs("public/img",$image->getClientOriginalName());
            $imgname= $image->getClientOriginalName();

            ProductImage::create([

                "product_id"=>$product['id'],
                "image"=>$imgname

            ]);
        }

    }





        return redirect('dashboard/product');



     }

     public function edit($idproduct){

          $id=Product::find($idproduct);
          $Category=Category::all();

        return view('admin.products.updateProduct',["data"=>$id],compact('Category'));

     }

     public function update(Request $request,$id){

        $data= Product::find($id);
        if ($request->hasFile('image')) {
            $request->file('image')->storeAs("public/img", $request->file('image')->getClientOriginalName());
            $imgname = $request->file('image')->getClientOriginalName();
            // Further processing or saving the image name
            $data->update([
                "name"=>$request['name'],
                "name_english"=>$request["name_english"],
                "description"=>$request['description'],
                "description_english"=>$request['description_english'],
    
                "Alldescription"=>$request['Alldescription'],
                "Alldescription_english"=>$request['Alldescription_english'],
                "price"=>$request['price'],
                "discount_price"=>$request['discount_price'],
                "image"=>$imgname,
                "category_id"=>$request['category_id'],
            ]);
        } else {
            $data->update([
                "name"=>$request['name'],
                "name_english"=>$request["name_english"],
                "description"=>$request['description'],
                "description_english"=>$request['description_english'],
    
                "Alldescription"=>$request['Alldescription'],
                "Alldescription_english"=>$request['Alldescription_english'],                "price"=>$request['price'],
                "discount_price"=>$request['discount_price'],
                "category_id"=>$request['category_id'],
            ]);
            // Handle the case where the 'image' field is not set in the request
        }

        

   return redirect('dashboard/product');

     }


     public function destroy( $product)
     {
        Product::find($product)->delete();


         return redirect("dashboard/product");
     }


     public function storeImage(Request $request){


       }




}
