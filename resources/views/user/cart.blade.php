<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>E-Commerce</title>
    <style>
        table * {
            align-content: center;
            align-items: center;
            text-align: center;
            font-size: 22px;
        }

        .row {
            text-align: right;
            margin-right: 40px;
            margin: 10px
        }
        /* #order{
            margin-top: 15px;
            margin-bottom: 15px;
            font-size: 24px;

        } */
        /* .col-sm-6,  */
    </style>
</head>

<body>
    @include('user.navigation')
    <h1 class="container-fluid p-5  text-white text-center">Cart</h1>
    {{-- @if (empty($cartItems))
        <p>Your cart is empty.</p>
    @else --}}
    <table class="table-bordered table-hover mx-auto container ">
        <thead>
            <tr style="text-align: center">
                <th>Product-Id</th>
                <th>Product-Name</th>
                <th>Product-Rate</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->product_id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_rate }}</td>
                    <td>
                        <form action="{{ route('delete', ['id' => $product->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger " id="remove">Remove</button>
                            <a href="{{route('order', ['id'=>$product->product_id])}}" class="btn btn-primary" id="order">Order Now</a>   

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>


    </table>
    <?php
    $totalPrice = 0;
    foreach ($products as $product) {
        $totalPrice += $product->product_rate;
    }
    
    ?>


    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Total:{{ $totalPrice }}</h1>

            </div>
            {{-- <div class="col-sm-6">
                <a href="{{route('order')}}" class="btn btn-primary" id="order">Order</a>   

            </div> --}}

        </div>
    </div>









</body>

</html>
