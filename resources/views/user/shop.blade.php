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
        body {
            background-color: #dee9ff;
        }

        .container {
            background-color: white;
            /* width: fit-content; */
            padding: 10px;
            border-radius: 30px;
            box-shadow: 0px 6px 75px rgba(0, 0, 0, 0.075);

        }

        img {
            width: 200px;
            height: 200px;
            border-radius: 5px;
            margin: 5px;
        }

        .product-container {

            background-color: #dee9ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            /* width: max-content; */
            text-align: center;
            margin: 8px;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0px 6px 75px rgba(0, 0, 0, 0.075);
        }

        .product {
            text-align: center;
            margin: 10px;
        }

        .product-name {
            text-align: center;
            margin: 0;
            color: #000066;
            font: 700;
            font-size: 18px;

        }

        .product-price {
            text-align: center;
            margin: 0;
            font: 700;
            font-size: 18px;
        }

        .cart {

            font: white;

        }
    </style>
</head>

<body>
    @include('user.navigation')

    <div class="container">
        @foreach ($products as $product)
            <div class="col-md-3">
                <div class="product-container">
                    <div class="product">
                        <a href="{{ route('order', ['id' => $product->id]) }}">
                            <img src="{{ asset('storage/' . $product->product_photo) }}">
                            <p class="product-name">{{ $product->product_name }}</p>
                        </a>
                        <p class="product-price">Rs. {{ $product->product_price }}</p>
                        <button class="cart"><a href="{{ route('add-to-cart', ['product-id' => $product->id, 'product-name' => $product->product_name, 'product-rate' => $product->product_price]) }}" onclick="">add to cart</a></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
