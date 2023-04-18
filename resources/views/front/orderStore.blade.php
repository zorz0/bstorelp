<!DOCTYPE html>
<html>
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>

<body>
    @include('sweetalert::alert')


    <h3>Using CSS to style an HTML Form</h3>

    <div>
        <form action="{{ route('order.store') }}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="name" value="{{ Auth::user()->name }}">

            <label for="fname">your Name : </label>

            <span>{{ Auth::user()->name }}</span>

<br>
<br>
<hr>


            <label for="lname">Phone</label>
            <input type="text" id="lname" name="phone" placeholder="Your Phone">

            <label for="lname">Address</label>
            <input type="text" id="lname" name="address" placeholder="Your Address..">

            <label for="lname">postal code</label>
            <input type="text" id="lname" name="postal_code" placeholder="Your postal code ">

            <input type="hidden" name="shipping_price" value="3">

            <hr>
            <label for="lname"> سعر الطلب :</label>
            <span>{{ $totalprice }} دينار </span>
            <hr>

            <label for="lname"> سعر الشحن :</label>
            <span> 3 دينار</span>
            <hr>
            <label for="lname"> الاجمالي:</label>
            <span> {{ $totalprice + 3 }} دينار </span>

            <input type="hidden" name="total_price" value="{{ $totalprice }}" hidden>

            <input type="submit" value="Submit">

        </form>
    </div>

</body>

</html>
