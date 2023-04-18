

<ul>
    @foreach($products as $product)
        <li style="color:black">{{ $product->name }} </li>
    @endforeach
</ul>