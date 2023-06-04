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
       
       table {
            background-color: #dee9ff;
            padding: 50px;

            align-content: center;
            align-items: center;
            text-align: center;
            font-size: 16px;
            border-radius: 10px;
            box-shadow: 0px 0px 100px rgba(0, 0, 0, 0.080);
        }
        th{
            text-align: center;

        }
        .body{
            /* background-color: #dee9ff; */
            align-content: center;
            align-items: center;
            text-align: center;
           padding-top: 20px;
           padding-left: 75px;
           padding-right: 75px; 
           /* border-radius: 10px;
            box-shadow: 0px 6px 75px rgba(0, 0, 0, 0.075); */
        }
    </style>
</head>
<body>
    @include('admin.navigation')
    <h1 style="text-align: center">User List</h1>

    <div class="body">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Gender</th>
            <th scope="col">Address</th>
            <th scope="col">Hobby</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
          <tr>
            <th>{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <th>{{$user->gender}}</th>
            <td>{{$user->address}}</td>
            <td>{{$user->hobby}}</td>
            
          </tr>
          @endforeach
      
        </tbody>
      </table>
    </div>

    
</body>
</html>