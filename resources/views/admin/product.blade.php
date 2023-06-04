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
       
        table * {
            /* background-color: #dee9ff; */

            
            align-content: center;
            align-items: center;
            text-align: center;
            font-size: 16px;
            /* border-radius: 10px;
            box-shadow: 0px 6px 75px rgba(0, 0, 0, 0.0200); */
        }
        table{
            background-color: #dee9ff;
            font-size: 16px;
            border-radius: 10px;
            box-shadow: 0px 0px 100px rgba(0, 0, 0, 0.080);        }
        .body{
            
           padding-top: 20px;
           padding-left: 200px;
           padding-right: 200px; 
        }
    </style>
</head>
<body>
    @include('admin.navigation')

    <h1 style="text-align: center">Product List</h1>
    <div class="body">
        
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">price</th>
           
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
          <tr>
            <th>{{$product->id}}</th>
            <td>{{$product->product_name}}</td>
            <td>{{$product->product_price}}</td>
         
            
          </tr>
          @endforeach
      
        </tbody>
      </table>
    </div>

    
</body>
</html>