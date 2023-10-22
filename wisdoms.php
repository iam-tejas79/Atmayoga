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
    <!-- Bootstrap CSS -->
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/wisdoms.css">

    <!-- owl carousel -->
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css"
        rel="stylesheet">
    <title>Atmayog-wisdoms !</title>
</head>

<body>

    <?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location:login.php');
    }
    ?>
    <?php include("navbar-in.php"); ?>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up-circle"></i></button>

    <h1 class="text-success text-center">Wisdoms</h1>
    <div class="text-center">
        <img class="text-center" src="./assets/lotus-pink.png" alt="">
    </div>
    <div class="sloka text-center container">
        <h4 class="text-dark"> योगस्थ: कुरु कर्माणि सङ्गं त्यक्त्वा धनञ्जय |
            सिद्ध्यसिद्ध्यो: समो भूत्वा समत्वं योग उच्यते |</h4>

        <h4 class="text-muted my-3"> Be steadfast in the performance of your duty, O Arjun, abandoning attachment to
            success
            and
            failure. Such equanimity is called Yog.</h4>

        <h6 class="text-theme">Bhagvad gita 2.48</h6>
    </div>
    <div class="container">
        <div class="outer my-3 mx-lg-5 rounded-3 border-1 border p-3">
            <h3 class="heading">7 wisdoms of yoga</h3>
            <a href="./yoga-wisdoms.php"><button class="btn btn-dark">Read !</button></a>
        </div>
        <div class="outer my-3 mx-lg-5 rounded-3 border-1 border p-3">
            <h3 class="heading">5 wisdoms of success</h3>
            <a href="./success-wisdoms.php"><button class="btn btn-dark">Read !</button></a>
        </div>
        <div class="outer my-3 mx-lg-5 rounded-3 border-1 border p-3">
            <h3 class="heading">4 ancient wisdoms about Brahmacharya</h3>
            <a href="./bramha-wisdoms.php"><button class="btn btn-dark">Read !</button></a>
        </div>
        <div class="outer my-3 mx-lg-5 rounded-3 border-1 border p-3">
            <h3 class="heading">6 Wisdoms about mind</h3>
            <a href="./mind-wisdoms.php"><button class="btn btn-dark">Read !</button></a>
        </div>
        <!-- <div class="outer my-3 mx-lg-5 rounded-3 border-1 border p-3">
            <h3 class="heading">5 Wisdoms about healthiness</h3>
            <a href=""><button class="btn btn-dark">Read !</button></a>
        </div> -->
    </div>
    <?php include("footer-in.php"); ?>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="./js/wow.js"></script>
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
        integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>
</body>

</html>