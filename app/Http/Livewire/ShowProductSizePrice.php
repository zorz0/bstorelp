<?php
namespace App\Http\Livewire;

use Illuminate\Routing\Route;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
class ShowProductSizePrice extends Component
{
public $selectedsizeid;
    public $selectedSize;
    public $selectedPrice;
    public $discount;
public $data2;
   public $quantity;

    public function mount($id)
    {


        $this->data2 = Product::find($id);
        $this->dataImages = ProductImage::where('product_id', $this->data2->id)->get();
        $this->productSize = ProductSize::where('product_id', $this->data2->id)->get();
        $latestProductSize = ProductSize::where('product_id', $this->data2->id)->latest()->first();
        $this->selectedsizeid=$latestProductSize->id;
        $this->quantity=1;
        $this->selectedSize = $latestProductSize ? $latestProductSize->size : null;
        $this->selectedPrice = $latestProductSize ? $latestProductSize->price : null;
        $this->discount = $latestProductSize ? $latestProductSize->discount : null;
    }

    public function render()
    {
        return view('livewire.show-product-size-price', [
            'data2' => $this->data2,
            'dataImages' => $this->dataImages,
            'productSize' => $this->productSize,
        ]);
    }
    public function updatePrice()
    {

        $id = $this->selectedSize;
        $this->selectedsizeid=$this->selectedSize;
        $productSize = ProductSize::where('id', $id)->first();
        $latestProductSize=$id;
        $this->selectedSize = $productSize ? $productSize->size : null;
        $this->selectedPrice = $productSize ? $productSize->price : null;
        $this->discount = $productSize ? $productSize->discount : null;
    }

    public function updatePriceWithQuantity()
{
    $id = $this->selectedsizeid;

    $productSize = ProductSize::where('id', $id)->first();

    $this->selectedSize = $productSize ? $productSize->size : null;
    $this->selectedPrice = $productSize ? $productSize->price * $this->quantity : null;
    $this->discount = $productSize ? $productSize->discount * $this->quantity : null;

    // Update the same variables used in the view
    $this->emit('updateSelectedSize', $this->selectedSize);
    $this->emit('updateSelectedPrice', $this->selectedPrice);
    $this->emit('updateDiscount', $this->discount);
}
}
