<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>E-Commerce</title>

    <style>
        body {
            background-color: #dee9ff;
        }

        .container {
            background-color: white;
            height: 100%;
            margin: auto;
            padding: 20px;
            border-radius: 30px;
            box-shadow: 0px 6px 100px rgba(0, 0, 0, 0.075);
            width: 600px;
            text-align: center; 
            
        }
        h1{
            text-align: center;
            margin-bottom: 50px;
            font: 1200;

        }

        .btn {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #5791ff;
            border: none;
            color: white;
            margin-top: 10px;
            width: 100%;
           
        }
        .form-group{
            /* justify-content: c; */

        }
        .name{
            font-size: 18px;
            text-align: center;
        }
        .input{
            font-size: 18px;

            text-align: left;
        }
    </style>

</head>

<body>
    @include('admin.navigation')


    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.home') }}">
        @csrf

        <div class="container">
            <h1>Product Upload</h1>
            
            <div class="form-group row">
                <label class="name col-sm-5 col-form-label" for="product_name">Product Name:</label>

                <div class="input col-sm-7">
                    <input type="text" name="product_name" id="product_name" required><br><br>
                </div>
            </div>
            <div class="name form-group row">
                <label class="col-sm-5 col-form-label" for="product-price">Product Price:</label>

                <div class=" input col-sm-7">
                    <input type="text" name="product_price" id="product-price" required><br><br>
                </div>
            </div>
            <div class="name form-group row">
                <label class="col-sm-5 col-form-label" for="product-photo">Product Photo:</label>

                <div class="input col-sm-7">
                    <input type="file" name="product_photo" id="product_photo"><br><br>
                </div>
            </div>

            

                <button type="submit" class="btn btn-block">Upload</button>

            

        </div>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
