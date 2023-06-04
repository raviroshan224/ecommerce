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
            background-image: url("{{ asset('ecommerce/background.jpg') }}")

        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            min-height: 70vh;
            color: aliceblue;
            font-size: 74px;
        }
        .container a {
            
            color: aliceblue;
            font-size: 44px;
            
        }
        .breadcrumb-nav {
  background-color: #f5f5f5;
  padding: 10px;
}

.breadcrumb {
  list-style: none;
  padding: 0;
  margin: 0;
}

.breadcrumb-item {
  display: inline-block;
  margin-right: 5px;
}

.breadcrumb-item a {
  color: #333;
  text-decoration: none;
}

.breadcrumb-item.active {
  color: #777;
}
.black-border {
      border: 5px solid #000;
      background: #000;
    }

    </style>
</head>

<body>
    @include('user.navigation')

    {{-- <nav class="breadcrumb-nav">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Category</a></li>
          <li class="breadcrumb-item active">Subcategory</li>
        </ul>
      </nav> --}}
      
    <div class="container">
        <div class="row">
            <div class="centered-text">
                <h1>Fall-Summer Collection 2023</h1>
            </div>
            <div class="centered-text">
                <a href="{{route('shop')}}" class="black-border">Shop Now</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>

</html>
