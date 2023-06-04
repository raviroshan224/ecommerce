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
        h1 {
            text-align: center;
        }

        .col-sm-5 {
            text-align: right;
        }

        .col-sm-6 {
            text-align: left;
            /* margin-left: 5px; */


        }

        .row {
            margin-left: 40px;
            margin-top: 20px;
        }

        .btn {
            float: right;
            font-size: 24px;
            margin-right: 50px;
        }
    </style>
</head>

<body>
    @include('user.navigation')


    <h1>Welcome, {{ $user->name }}</h1>

    <button class="btn btn-dark"><a href="{{ route('logout') }}">Logout</a></button>



    <div class="container">
        <div class="row">
            <form>
                <div class="form-group row">
                    <h4 class="col-sm-5 col-form-label">Name:</h4>
                    <div class="col-sm-6">
                        <h4>{{ $user->name }}</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <h4 class="col-sm-5 col-form-label">Email:</h4>
                    <div class="col-sm-6">
                        <h4>{{ $user->email }}</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <h4 class="col-sm-5 col-form-label">Phone:</h4>
                    <div class="col-sm-6">
                        <h4>{{ $user->phone }}</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <h4 class="col-sm-5 col-form-label">Date of Birth:</h4>
                    <div class="col-sm-6">
                        <h4>{{ $user->dob }}</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <h4 class="col-sm-5 col-form-label">Hobby:</h4>
                    <div class="col-sm-6">
                        <h4>
                            @php
                                $hobbies = json_decode($user->hobby);
                            @endphp
                            @foreach ($hobbies as $checkbox)
                                {{ $checkbox }}
                            @endforeach
                        </h4>
                    </div>
                </div>
                <div class="form-group row">
                    <h4 class="col-sm-5 col-form-label">Gender:</h4>
                    <div class="col-sm-6">
                        <h4>{{ $user->gender }}</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <h4 class="col-sm-5 col-form-label">Address:</h4>
                    <div class="col-sm-6">
                        <h4>{{ $user->address }}</h4>
                    </div>
                </div>
                <!-- Add more form fields as needed -->
            </form>
        </div>


    </div>



    {{-- <img src="ecommerce/tshirt.jpg" alt="img not appear"> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
