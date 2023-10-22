<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Genos:wght@300&family=Poppins:wght@100;300;500&family=Rampart+One&display=swap"
        rel="stylesheet">
    <!-- wow css -->
    <link rel="stylesheet" href="./css/wow.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Create Account !</title>
</head>

<body>
    <div id="register">
        <?php
        include("navbar-outer.php");
        ?>
        <div class="container-fluid mb-5 pb-5">
            <div class="container">

                <h1 class="title-login text-center">Register to Atmayog</h1>
                <div class="row mx-lg-5 out-div py-1">
                    <div class="col-lg-5 col-md-5 rotating">
                        <div class="parent">
                            <img data-wow-duration="4s" data-wow-iteration="400" data-wow-delay=".95s"
                                class="image1 img-fluid wow rotateIn" src="./assets/chakra.png" />
                            <img class="image2 img-fluid" src="./assets/yoga/one.png" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 form p-lg-3">
                        <form method="post" action="validation.php" class="p-lg-5">
                            <h3 class="text-center login-heading">New Registeration</h3>
                            <div class="">
                                <label for="Full name" class="form-label">Full Name: </label>
                                <input type="name" name="name" class="form-control" id="name"
                                    placeholder="enter your full name" Required>
                                <label for="login-email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="login-email"
                                    placeholder="enter your email here...." Required>
                            </div>
                            <div class="">
                                <label for="mob" class="form-label">Mobile</label>
                                <input type="number" name="mob" class="form-control" id="mob" placeholder="Mobile"
                                    Required>
                            </div>
                            <div class="">
                                <label for="login-password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="login-password"
                                    placeholder="Password" Required>
                            </div>
                            <div class="">
                                <label for="birthday" class="form-label">Date of Birth:</label>
                                <input type="date" name="dob" class="form-control" id="birthday" name="birthday"
                                    Required>
                            </div>
                            <div class="">
                                <div class="g-recaptcha" data-sitekey="6LePfukkAAAAAH1309ab5JGoJIuL9DKZcAPZAn7T"
                                    Required></div>
                                <button type="submit" class="btn btn-two">Submit</button>
                            </div>
                        </form>
                        <div class="">
                            <p class="px-lg-5">Already a <span class="text-theme">Atmayog </span>member ? Login here
                            </p>
                            <a class="px-lg-5" href="./login.php"><button class="btn btn-two">LOGIN</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("footer-outer.php");
    ?>
    </div>
    <style>
        <?php include "./css/style.css" ?>
    </style>
    <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./js/wow.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</body>

</html>