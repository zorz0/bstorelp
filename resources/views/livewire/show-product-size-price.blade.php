<div wire:ignore>
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
            <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
            <p>{{ $data2->description }}</p>
            <ul>
                <li>الصنف: <span>{{ $data2->category_id }}</span></li>
                <li>قيمة التوصيل: <span>مجاني</span></li>
                <li>الحجم المتوفر:
                    <select wire:model="selectedSize" wire:change="updatePrice">
                        <option>{{$selectedSize}}</option>
                        @foreach ($productSize as $item)
                        <option value="{{$item->id}}">{{$item->size}}</option>   
                        @endforeach
                    </select>
                </li>
            </ul>
        </div>

        <div class="purchase-info">
            <input name="quantity" type="number" min="0" value="1">
            <button type="submit" class="btn">
                اضف الى السلة
            </button>
            <a style="text-decoration: none; color)" href="{{ route('totalCards') }}" class="btn btn-info">
                السلة <i class="fas fa-shopping-cart"></i>
            </a>
        </div>
    </form>
</div>
