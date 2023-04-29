<?php

namespace App\Http\Livewire;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowProductSizePrice extends Component
{    public $selectedSize;
    public $selectedPrice;
    public $discount;
    public function render()
    {
        $id = request()->route('id');
     
        $data2=Product::find($id);

        $dataImages=ProductImage::where('product_id',$data2->id)->get();
    
         $productSize=ProductSize::where('product_id',$data2->id)->get();

     
        return view('livewire.show-product-size-price',['data2'=>$data2,'dataImage'=>$dataImages,'productSize'=>$productSize]);
    }
    public function mount()
    {
        $id = request('id');
    
        $data2 = Product::find($id);
        $latestProductSize = ProductSize::where('product_id', $data2->id)->latest()->first();
    
        $this->selectedSize = $latestProductSize ? $latestProductSize->size : null;
        $this->selectedPrice = $latestProductSize ? $latestProductSize->price : null;
        $this->discount = $latestProductSize ? $latestProductSize->discount : null;

    }

   
    public function updatePrice()
    {
    
        $id = $this->selectedSize;
       
        $productSize = ProductSize::where('id', $id)->first();
        $this->selectedSize = $productSize ? $productSize->size : null;
        $this->selectedPrice = $productSize ? $productSize->price : null;
        $this->discount = $productSize ? $productSize->discount : null;
    }
}
