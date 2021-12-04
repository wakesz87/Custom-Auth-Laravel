<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Bejelentkezés</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 60px;">
                <h3>Bejelentkezés</h3>
                <hr>
                <form>

                    <div class="form-group">
                        <label for="username">Felhasználónév</label>
                        <input type="text" class="form-control" placeholder="Add meg a Felhasználóneved" name="name" value="">
                    </div>
                  
                    <div class="form-group">
                        <label for="password">Jelszó</label>
                        <input type="text" class="form-control" placeholder="Add meg a Jelszavad" name="password" value="">
                    </div>


                    <div class="form-group">
                        <button class="btn btn-block btn-warning" type="submit">Bejelentkezés</button>
                    </div>
                    <br>
                    <a href="registration">Ha még nem regisztráltál, katt ide!</a>
                    <br>
                    <a href="forgotpass">Elfelejtett jelszó, katt ide!</a>
                </form>
            </div>
        </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>