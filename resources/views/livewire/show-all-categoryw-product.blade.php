<div>
        <form action="{{ route('card.store') }}" method="post">
            @csrf
            <div class="product-price">
                <p class="last-price">السعر القديم:
                    <span>{{ $selectedPrice + $discount }}</span>
                </p>
                <p class="new-price">السعر الجديد: <span>{{ $selectedPrice }}</span></p>
            </div>
    
            <div class="product-detail">
                <h2>معلومات عن المنتج : </h2>
                <input type="text" name="product_id" value="{{ $data2['id'] }}" hidden>
                <input type="text" name="productSize_id" value="{{ $selectedsizeid }}" hidden>
                <input type="text" name="price" value="{{ $selectedPrice }}" hidden>

                <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
                <p>{{ $data2->description }}</p>
                <ul>
                    <li>الصنف: <span>{{ $data2->category_id }}</span></li>
                    <li>قيمة التوصيل: <span>مجاني</span></li>
                    <li>الحجم المتوفر:
                        <select style="width: 100px;" wire:model="selectedSize" wire:change="updatePrice">
                            <option value="{{$selectedsizeid}}">{{$selectedSize}}</option>
                            @foreach ($productSize as $item)
                            @if ($item->id==$selectedsizeid)
                            @else
                            <option value="{{$item->id}}">{{$item->size}}</option>   

                            @endif
                            @endforeach
                        </select>
                    </li>
                    <li>الكمية      <span> <input style="width: 100px;margin-right: 48px;" name="quantity" type="number" min="0" wire:model="quantity" wire:change="updatePriceWithQuantity" value="1">
                    </span></li>

                </ul>
            </div>
    
            <div class="purchase-info">
                <button type="submit" class="btn">
                    اضف الى السلة
                </button>
                <a style="text-decoration: none; color)" href="{{ route('totalCards') }}" class="btn btn-info">
                    السلة <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
        </form>
    </div>
    
