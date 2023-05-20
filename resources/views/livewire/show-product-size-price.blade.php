<div>
    <form action="{{ route('card.store') }}" method="post">
        @csrf
        <div class="product-price">
          {{--   <p class="last-price">السعر القديم:
                <span>{{ $selectedPrice + $discount }}</span>
            </p> --}}
            <p class="new-price customfont u-custom-font text-right" >{{ __('addToCard.new-price') }}
            : <span class="customfont u-custom-font text-right"> {{ $selectedPrice }} </span></p>
        </div>

        <div class="product-detail">
            <h2 class="customfont u-custom-font text-right">{{ __('addToCard.about-product') }} : </h2>
            <input type="text" name="product_id" value="{{ $data2['id'] }}" hidden>
            <input type="text" name="productSize_id" value="{{ $selectedsizeid }}" hidden>
            <input type="text" name="price" value="{{ $selectedPrice }}" hidden>
@auth
            <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
            @endauth
            <p class="customfont u-custom-font text-right" style="max-width: 500px"> {{ getDirection() == 'rtl' ? $data2->Alldescription : $data2->Alldescription_english }}</p>
            <ul>
                <li class="customfont u-custom-font text-right">{{ __('addToCard.product-category') }}: <span class="customfont u-custom-font text-right">{{ $data2->category_id }}</span></li>
                <li class="customfont u-custom-font text-right">{{ __('addToCard.shipping-price') }}: <span class="customfont u-custom-font text-right">{{ __('addToCard.shipping') }}</span></li>
                <li class="customfont u-custom-font text-right">{{ __('addToCard.available-size') }}:
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
                <li class="customfont u-custom-font text-right">{{ __('addToCard.quantity') }} 
                    <span > <input style="width: 100px;" name="quantity" type="number" min="0" wire:model="quantity" wire:change="updatePriceWithQuantity" value="1">
                </span></li>

            </ul>
        </div>
        @auth
        <div class="purchase-info">
            <button type="submit" class="btn">
                {{ __('addToCard.add_to_card') }}
            </button>
            <a style="text-decoration: none; color)" href="{{ route('totalCards') }}" class="btn btn-info">
                {{ __('addToCard.card') }} <i class="fas fa-shopping-cart"></i>
            </a>
        </div>
    
    </form>
    @endauth
    @guest
    <div class="purchase-info">
       <a class="btn" href="{{route('login')}}">
        {{ __('addToCard.add_to_card') }}
       
       </a>
       
    </div>
    @endguest
</div>
