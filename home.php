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

    <!-- owl carousel -->
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css"
        rel="stylesheet">
    <title>Atmayog-Home !</title>
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


    <div class="container-fluid">
        <div class="container">
            <div class="d-lg-flex justify-content-between d-md-flex">
                <div class="d-flex flex-column text-center justify-content-center wow fadeInDown">
                    <h1 class="main-heading-1">योग: कर्मसु कौशलम</h1>
                    <p class="main-p-1">Yoga is way to skill your work</p>
                </div>
                <div>
                    <img src="./assets/section-1-home.png" class="img-fluid wow fadeInDown" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid section-2 py-4">
        <div class="container">
            <div class="row justify-content-center my-5">
                <h4 class="text-success text-center">Explore </h4>
                <div class="col-lg-6 col-md-6">
                    <a href="./courses-in.php">
                        <div class="m-3 text-center">
                            <h5>All Courses</h5>
                            <img class="admin-sessions" src="./assets/courses-admin.jfif" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <a href="./wisdoms.php">
                        <div class="m-3 text-center">
                            <h5>All Wisdoms</h5>
                            <img class="admin-sessions" src="./assets/all-users.jfif" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="review-yourself parallax-2 position-relative  container-fluid py-5">
        <div class="container text-center mt-lg-3 mb-lg-5 wow fadeInDown">
            <img class="lotus-pink" src="./assets/lotus-pink.png" alt="">
            <h1 class="main-heading-1 text-light"> Revive yourself </h1>
            <p class="main-p-1 text-light"> Through our sessions</p>
        </div>
    </div>
    <div class="container-fluid" id="index">
        <div class="container py-3">

            <div class="d-lg-flex justify-content-center">
                <div class="initial-image">
                    <img class="wow fadeInDown" src="./assets/D1-removebg-preview1.png" alt="">
                </div>
                <div class="right text-center align-self-center wow fadeInDown">
                    <h1 class="my-3 title">ATMAYOG</h1>
                    <p class="quote">
                        “Yoga is the ultimate practice. It simultaneously stimulates our inner light and quiets our
                        overactive minds. It is both energy and rest. Yin and Yang. We feel the burn and find our
                        bliss.”
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid parallax position-relative pt-5">
        <div class="overlaySlider"></div>
        <div class="text-center py-5">

            <div class="owl-carousel owl-theme mb-5">
                <div class="item p-4">
                    <i class="bi bi-chat-left-quote"></i>
                    <h4>
                        “Distractions are everywhere. Notice what takes your attention, acknowledge it, and then let it
                        go.”
                    </h4>
                </div>
                <div class="item p-4">
                    <i class="bi bi-chat-left-quote"></i>
                    <h4>“We can’t always change what’s happening around us, but we can change what happens within us.”
                    </h4>
                </div>
                <div class="item p-4">
                    <i class="bi bi-chat-left-quote"></i>
                    <h4>“Meditation nourishes the mind in the same way that food nourishes the body.”</h4>
                </div>
                <div class="item p-4">
                    <i class="bi bi-chat-left-quote"></i>
                    <h4>“Life is short. We can live it lost in thought or we can choose to be present as life unfolds
                        around us.” </h4>
                </div>
                <div class="item p-4">
                    <i class="bi bi-chat-left-quote"></i>
                    <h4>“A day thinking about what could happen, should happen, or what might have been is a day
                        missed.”</h4>
                </div>
                <div class="item p-4">
                    <i class="bi bi-chat-left-quote"></i>
                    <h4>“Yoga is a way to freedom. By its constant practice, we can free ourselves from fear, anguish.”
                    </h4>
                </div>
                <div class="item p-4">
                    <i class="bi bi-chat-left-quote"></i>
                    <h4>“Your task is not to seek for love, but merely to seek and find all the barriers within yourself
                        ."</h4>
                </div>
                <div class="item p-4">
                    <i class="bi bi-chat-left-quote"></i>
                    <h4>“Yoga is a light, which once lit, will never dim. The better your practice, the brighter the
                        flame"</h4>
                </div>

            </div>
            <div>
                <a href="mailto:atmayogafitness@gmail.com">
                    <h3><i class="bi bi-envelope-fill"></i> Contact us</h3>
                </a>
            </div>
        </div>
    </div>

    <div class="namaste container-fluid p-5">
        <div class="container p-lg--5 text-center">
            <img src="./assets/left-circle.png" class="left-circle img-fluid" alt="">
            <img src="./assets/right-circle.png" class="right-circle img-fluid" alt="">
            <h1 class="main-heading-1"> Namaste ! &#128591</h1>
            <p class="main-p-1 px-lg-5 mx-lg-5 my-lg-5"> This is our try to give the best to the youth of this nation to
                give
                the
                practical
                knowledge about our
                ancient yoga sutras and wisdoms
                that are practical in our life .</p>
        </div>
    </div>
    <?php include("footer-in.php"); ?>
    <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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