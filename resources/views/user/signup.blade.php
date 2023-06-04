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

        .registration-form {
            padding: 25px 0;
        }

        .registration-form form {
            background-color: #fff;
            max-width: 600px;
            margin: auto;
            padding: 10px 40px;
            border-radius: 30px;
            box-shadow: 0px 6px 75px rgba(0, 0, 0, 0.075);

        }



        .registration-form .item {
            border-radius: 20px;
            margin-top: 15px;
            padding: 10px 20px;
        }

        .registration-form .create-account {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #5791ff;
            border: none;
            color: white;
            margin-top: 5px;
            width: 100%;

        }

        .name {
            display: flex;
        }

        .fname,
        label {
            margin-right: 20px;
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
    <div class="registration-form">

        <form method="POST" action="{{ route('signup') }}">
            @csrf

            <h2 style="margin-bottom: 10px"> Sign Up </h2>

            <div class="form-group">
                <input type="text" class="fname form-control item" id="name" name="name"
                    placeholder="First Name">
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror

            </div>
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

            <div class="form-group">
                <input type="text" class="form-control item" id="phone-number" name="phone"
                    placeholder="Phone Number">
                @error('phone')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="date" class="form-control item" id="birth-date" name="dob" placeholder="Birth Date">
                @error('dob')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <select name="gender" type="text" class="form-control item" id="gender" name="gender"
                    placeholder="Gender">
                    <option value="">Gender</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="other">Other</option>
                </select>
                @error('gender')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="address" name="address" placeholder="Address">
                @error('address')
                    <span class="error">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group form-control item">
                Hobbies: <br>

                <input type="checkbox" name="hobby[]" value="sports" id="sport">
                <label for="sport">Sports</label>
                <input type="checkbox" name="hobby[]" value="music" id="music">
                <label for="music">Music</label>
                <input type="checkbox" name="hobby[]" value="reading" id="read">
                <label for="read">Reading</label>

            </div>
            @error('hobby')
                <span class="error">{{ $message }}</span>
            @enderror
            <button type="submit" class="btn btn-block create-account">Create Account</button>


            <p class="already" style="margin: 10px"><a href="{{ route('login') }}"> Already have account?
                    Login</a></p>



        </form>


    </div>




    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
    </script>



</body>

</html>
