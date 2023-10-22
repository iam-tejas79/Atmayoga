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
    <title>Login !</title>
</head>

<body>
    <div id="login">
        <?php
        include("navbar-outer.php");
        ?>
        <div class="container-fluid">
            <div class="container">


                <h1 class="title-login text-center">Login to Atmayog</h1>
                <div class="row mx-lg-5 out-div">
                    <div class="col-lg-5 col-md-5 rotating">
                        <div class="parent">
                            <img data-wow-duration="4s" data-wow-iteration="400" data-wow-delay=".95s"
                                class="image1 img-fluid wow rotateIn" src="./assets/chakra.png" />
                            <img class="image2 img-fluid" src="./assets/yoga/one.png" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 form p-lg-3">
                        <form method="post" action="login-valid.php" class="p-lg-5">
                            <h3 class="text-center login-heading">Member Login</h3>
                            <div class="mb-3">
                                <label for="login-email" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" id="login-email"
                                    placeholder="enter your email here...." Required>
                            </div>
                            <div class="mb-3">
                                <label for="login-password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="login-password"
                                    placeholder="Password" Required>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LePfukkAAAAAH1309ab5JGoJIuL9DKZcAPZAn7T"></div>
                            <button type="submit" class="btn btn-two mb-3">Submit</button>
                        </form>
                        <p class="px-lg-5">New to <span class="text-theme">Atmayog ?</span> Create Account here. <a
                                href="./register.php"><button class="btn btn-two">CREATE
                                    ACCOUNT</button></a></p>
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
    <?php include "./css/style.css"?>
    </style>
    <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./js/wow.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>