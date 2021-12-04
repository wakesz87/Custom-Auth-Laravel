<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Regisztráció</title>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="text-center py-4">Regisztráció</h3>
                        <div class="card-body">
                            <hr>
                            <form action="{{route('register-user')}}" method="post">

                                @if(Session::has('success'))
                                <div class="alert alert-sucess">{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('failed'))
                                <div class="alert alert-danger">{{Session::get('failed')}}</div>
                                @endif


                                @csrf
                                <div class="form-group">
                                    <label for="username">Felhasználónév</label>
                                    <input type="text" class="form-control" placeholder="Add meg a Felhasználóneved" name="username" value="{{old('username')}}">
                                    <span class="text-danger">@error('username') {{$message}} @enderror</span>
                                </div>


                                <div class="form-group">
                                    <label for="email">Email cím</label>
                                    <input type="text" class="form-control" placeholder="Add meg az Email címed" name="email" value="{{old('email')}}">
                                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="password">Jelszó</label>
                                    <input type="password" class="form-control" placeholder="Add meg a Jelszavad" name="password" value="{{old('password')}}">
                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="lastname">Vezetéknév</label>
                                    <input type="text" class="form-control" placeholder="Add meg a Vezetékneved" name="lastname" value="{{old('lastname')}}">
                                    <span class="text-danger">@error('lastname') {{$message}} @enderror</span>
                                </div>


                                <div class="form-group">
                                    <label for="firstname">Keresztnév</label>
                                    <input type="text" class="form-control" placeholder="Add meg a Keresztneved" name="firstname" value="{{old('firstname')}}">
                                    <span class="text-danger">@error('firstname') {{$message}} @enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="birthdate">Születési idő</label>
                                    <input type="date" class="form-control" placeholder="Add meg a Születési időd" name="birthdate" value="{{old('birthdate')}}">
                                    <span class="text-danger">@error('birthdate') {{$message}} @enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="birthplace">Születési hely</label>
                                    <input type="text" class="form-control" placeholder="Add meg a Születési helyed" name="birthplace" value="{{old('birthplace')}}">
                                    <span class="text-danger">@error('birthplace') {{$message}} @enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="city">Város</label>
                                    <input type="text" class="form-control" placeholder="Add meg a Várost" name="city" value="{{old('city')}}">
                                    <span class="text-danger">@error('city') {{$message}} @enderror</span>
                                </div>


                                <div class="form-group">
                                    <label for="postalcode">Irányítószám</label>
                                    <input type="number" class="form-control" placeholder="Add meg az Irányítószámod" name="postalcode" value="{{old('postalcode')}}">
                                    <span class="text-danger">@error('postalcode') {{$message}} @enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="adress">Cím</label>
                                    <input type="text" class="form-control" placeholder="Add meg a Címed" name="adress" value="{{old('adress')}}">
                                    <span class="text-danger">@error('adress') {{$message}} @enderror</span>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-block btn-warning" type="submit">Regisztráció</button>
                                </div>
                                <br>
                                <a href="login">Ha már van regisztrációd katt ide!</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>