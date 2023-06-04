<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        body {
            background-color: #dee9ff;
        }

        .login-form {
            padding: 175px 0;
        }

        .login-form form {
            background-color: #fff;
            max-width: 600px;
            margin: auto;
            padding: 10px 40px;
            border-radius: 30px;
            box-shadow: 0px 6px 75px rgba(0, 0, 0, 0.075);

        }



        .login-form .item {
            border-radius: 20px;
            margin-top: 25px;
            padding: 10px 20px;
        }

        .login-form .create-account {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #5791ff;
            border: none;
            color: white;
            margin-top: 30px;
            width: 100%;

        }

      

        .already {
            text-align: center;

        }

        h2 {
            text-align: center;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

    <div class="login-form">

        <form method="POST" action="{{route('admin.store.login')}}">
            @csrf
           
            <h2 style="margin-bottom: 10px">Admin Sign In</h2>

            <div class="form-group">
                <input type="text" class="form-control item" id="email" name="email" placeholder="Email">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" name="password" placeholder="Password">
                @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
            </div>

            <button type="submit" class="btn btn-block create-account">Log In</button>


            <p class="already" style="margin: 10px"><a href="{{route('admin.signup')}}">Register Now</a></p>




        </form>


    </div>




    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
    </script>



</body>

</html>

  



