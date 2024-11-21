<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container">
        <div class="card" style=" width: 150%">
            <div class="card-header">
                <a href="/"><img src="home/assets/images/logo.png" alt="logo"
                        style="width: 200px; margin-left: auto; margin-right: auto; display: block"></a>
                <span class="splash-description" style="font-size: 30px;"> Registrations Form </span>
                <span class="splash-description">Please enter your user information.</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" name="name" placeholder="Name"
                                required autofocus autocomplete="name">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" name="phone" required=""
                                placeholder="Phone" required autocomplete="tel">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="email" name="email"
                                placeholder="E-mail" required autocomplete="email">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" list="gender" name="gender"
                                placeholder="Gender" required autocomplete="off">
                            <datalist id="gender">
                                <option value="Female"></option>
                                <option value="Male"></option>
                            </datalist>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" name="bday"
                                placeholder="Birthdate" onfocus="this.type='date'" onblur="this.type='text'"
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" name="address"
                                placeholder="Address" required autocomplete="street-address">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" id="pass1" type="password"
                                placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="password" required placeholder="Confirm">
                        </div>
                    </div>
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" style="background-color: #463426">Register
                        My Account</button>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By
                            creating an account, you agree the <a href="#">terms and conditions</a></span>
                    </label>

                    <div class="card-footer bg-white">
                        <div class="row">
                            <p>Already member? <a href="/logins" class="text-secondary">Login Here.</a></p>
                            <div id="icons">
                                <a href="https://www.facebook.com/Fareastcafe2022" target="_blank" class="item"><i
                                        class="fab fa-facebook-f mr-4" style="font-size: 150%"></i></a>
                                <a href="#" class="item"><i class="fab fa-twitter mr-4"
                                        style="font-size: 150%"></i></a>
                                <a href="https://www.instagram.com/far_eastcafe?igsh=MXRlcjNiODIyOGRwMA=="
                                    target="_blank" class="item"><i class="fab fa-instagram "
                                        style="font-size: 150%"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
</body>


</html>
