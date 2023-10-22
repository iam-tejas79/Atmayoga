<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:login.php');
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Genos:wght@300&family=Poppins:wght@100;300;500&display=swap"
        rel="stylesheet">
    <!-- wow css -->
    <link rel="stylesheet" href="./css/wow.css">
    <link rel="stylesheet" href="./admin/admin.css">
    <!-- Bootstrap CSS -->
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <!-- owl carousel -->
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css"
        rel="stylesheet">
    <title>Atmayog-Courses !</title>
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up-circle"></i></button>

    <?php include("navbar-in.php"); ?>
    <div class="container">
        <div class="section-title text-center">
            <h2><b>Topics of Daily yoga</b></h2>
            <hr>
        </div>
        <div class="d-block align-items-start">
            <?php
            $con = mysqli_connect('localhost', 'root');
            mysqli_select_db($con, 'atmayog');
            $q = "select * from yoga";
            $num = 1;
            $query = mysqli_query($con, $q);
            if (mysqli_num_rows($query) > 0) {
                while ($images = mysqli_fetch_assoc($query)) { ?>
                    <div class="text-center">
                        <h5 class="bg-dark text-light btn text-center">
                            <?= $num++ . ". " . $images['name'] ?>
                        </h5><br>
                        <iframe width="560" height="315" src="<?= $images['video'] ?>" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <h5 class="text-success">Steps to do it:</h5>
                        <p class="text-start">
                            <?= $images['description'] ?>
                        </p>
                        <!-- -->
                    </div>
                <?php }
            } ?>

        </div>
    </div>




    <?php include("footer-in.php"); ?>

    <script src="./js/wow.js"></script>
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>


</body>

</html>