<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        img {
            width: 100%;
            height: 100%;
        }

        /* body {
            padding: 20px;
        } */

        .body {
            padding: 10px;
        }

        .quantity-container {
            display: flex;
            align-items: center;
        }

        .quantity-input {
            width: 50px;
            text-align: center;
            font-size: 16px;
        }

        .quantity-button {
            width: 30px;
            height: 30px;
            font-size: 18px;
        }

        .back {
            margin-right: 40px;
        }

        #phone,
        #address {
            width: fit-content;
        }
    </style>
</head>

<body>
    @include('user.navigation')

        <form action="{{ route('ordernow', ['id'=>$product->id]) }}" method="POST">
            @csrf

            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{ asset('storage/' . $product->product_photo) }}" alt="nesdjnjs">
                    </div>
                    <input type="hidden" >
                    <div class="col-sm-4">
                        <div class="container">
                            <div class="row" style="margin-left: 40px">
                                <div class="row-sm-6" style="margin-bottom: 30px">
                                    <h1 class="nameprice" name="product_name" id="product_name">{{ $product->product_name }}</h1>
                                    <h3 class="nameprice" name="product_rate">Rs. {{ $product->product_price }}</h3>
                                </div>
                                <div class="row-sm-6" style="margin-bottom: 30px">
                                    <div class="quantity-container">
                                        <h3 style="margin-right: 20px">Quantity: </h3>
                                        <button class="quantity-button btn btn-light" id="decreaseButton">-</button>
                                        <input class="quantity-input form-control" type="number" id="quantityInput"
                                            value="1" min="1" style="width: 60px">
                                        <button class="quantity-button btn btn-light" id="increaseButton">+</button>
                                    </div>
                                </div>
                                <div class="row-sm-6" style="margin-bottom: 30px">
                                    <button type="submit" class="btn btn-primary"
                                        style="font-size: 20px">Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="container">
                            <div class="col">
                                <div class="row-sm-3" style="margin-bottom: 30px">
                                    <h3 for="address">Add address</h3>
                                    <input type="text" class="address form-control" id="address" name="user_address"
                                        placeholder="Enter Delivery Address" style="font-size: 22px">
                                </div>
                                <div class="row-sm-3" style="margin-bottom: 30px">
                                    <h3 for="phone">Add Phone Number</h3>
                                    <input type="text" class="phone form-control" id="phone" name="user_phone"
                                        placeholder="Enter Phone Number" style="font-size: 22px">
                                </div>
                                <div class="row-sm-3" style="display: flex; margin-bottom: 10px;">
                                    <h3 style="margin-right: 35px">Delivery charge:</h3>
                                    <h3>Rs. 90</h3>
                                </div>
                                <div class="row-sm-3" style="display: flex; margin-bottom: 30px;">
                                    <h3 style="margin-right: 35px">Total Fee:</h3>
                                    <h3 id="totalPrice" name="total_price">{{ $product->product_price }}</h3>
                                      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            // Get the quantity input and the total price display
            const quantityInput = $('#quantityInput');
            const increaseButton = $('#increaseButton');
            const decreaseButton = $('#decreaseButton');
            const totalPriceDisplay = $('#totalPrice');

            // Get the initial price and convert it to a number
            const initialPrice = parseFloat('{{ $product->product_price }}');

            // Update the total price when the quantity changes
            quantityInput.on('input', function() {
                const quantity = parseInt(quantityInput.val());
                if (quantity >= 0 && quantity <= 10) {
                    totalPrice = initialPrice * quantity;
                } else if (quantity < 0) {
                    quantityInput.val(0);
                    totalPrice = initialPrice * 0;
                } else if (quantity > 10) {
                    quantityInput.val(10);
                    totalPrice = initialPrice * 10;
                }
                totalPriceDisplay.text(totalPrice.toFixed(2));
            });



            // Increase the quantity when the increase button is clicked
            $('#increaseButton').click(function() {
                if (parseInt(quantityInput.val()) < 10) {
                    quantity = quantityInput.val(parseInt(quantityInput.val()) + 1);

                    // Increase the quantity and update the total price when the increase button is clicked

                    increaseButton.click(function() {
                        const quantity = parseInt(quantityInput.val());
                        if (quantity <= 10) {
                            const increasedQuantity = quantity;
                            quantityInput.val(increasedQuantity);
                            totalPrice = (initialPrice * increasedQuantity) + 90;
                            totalPriceDisplay.text(totalPrice);
                        }
                    });
                }
            });

            // Decrease the quantity when the decrease button is clicked
            $('#decreaseButton').click(function() {
                if (parseInt(quantityInput.val()) > 1) {
                    quantity = quantityInput.val(parseInt(quantityInput.val()) - 1);


                    // Decrease the quantity and update the total price when the increase button is clicked
                    decreaseButton.click(function() {
                        const quantity = parseInt(quantityInput.val());
                        const decreasedQuantity = quantity;
                        quantityInput.val(decreasedQuantity);
                        totalPrice = (initialPrice * decreasedQuantity) + 90;
                        totalPriceDisplay.text(totalPrice.toFixed(2));
                    });
                }
            });
        });
    </script>

</form>
</div>
</body>

</html>
