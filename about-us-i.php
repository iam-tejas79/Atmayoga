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
    <link rel="stylesheet" href="./css/about-o.css">
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
    <title>Atmayog-About Us !</title>
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

    <div class="container-fluid parallax3" id="index">
        <div class="container py-3">
            <div class="d-lg-flex justify-content-center">
                <div class="right text-center align-self-center wow fadeInDown">
                    <img src="./assets/yog_lotus.png" alt="">
                    <h1 class="mb-3">ATMAYOG</h1>
                    <p class="quote px-2 mb-4">
                        “Yoga is the ultimate practice. It simultaneously stimulates our inner light and quiets our
                        overactive minds. It is both energy and rest. Yin and Yang. We feel the burn and find our
                        bliss.”
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark pt-5">
        <div class="container">
            <h2 class="text-center text-light">Our Developer Team</h2>
            <div class="owl-carousel owl-theme mb-5">
                <div class="item p-5">
                    <i class="bi bi-chat-left-quote"></i>
                    <img src="./assets/developers/pawan.png" class="developer" alt="">
                    <h5>Pawan Mhaske</h5>
                    <h4>
                        Team Lead
                    </h4>
                </div>
                <div class="item p-5">
                    <i class="bi bi-chat-left-quote"></i>
                    <img src="./assets/developers/vaishnavi.webp" class="developer" alt="">
                    <h5>Vaishnavi Kumbhakarna</h5>
                    <h4>
                        Front-End Developer
                    </h4>
                </div>
                <div class="item p-5">
                    <i class="bi bi-chat-left-quote"></i>
                    <img src="./assets/developers/yash.png" class="developer" alt="">
                    <h5>Yash Lokhande</h5>
                    <h4>
                        Back-end Developer
                    </h4>
                </div>
                <div class="item p-5">
                    <i class="bi bi-chat-left-quote"></i>
                    <img src="./assets/developers/sanket.png" class="developer" alt="">
                    <h5>Sanket Ghode</h5>
                    <h4>
                        Python Developer
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row border my-5 py-5  wow fadeInDown">
            <div class="col-lg-3 col-md-3  wow fadeInDown">
                <h1>Awareness</h1>
            </div>
            <div class="col-lg-9 col-md-9">
                <p class="about-description wow fadeInDown">&nbsp; &nbsp; &nbsp; &nbsp;
                    Our goal is to make some awareness in today's generation about the health and <span
                        class="text-dark">fitness</span>. The lack of awareness about the
                    fitness leads
                    to the unhealthy lifestyle. Everyone is busy in their day-to-day works and tasks , because of it
                    most of the people are faling in giving priority to their fitness. These types of avoidance towards
                    fitness may leads to a bad impact
                    on health.
                </p>
            </div>
        </div>
        <div class="row border my-5 py-5  wow fadeInDown">
            <div class="col-lg-3 col-md-3  wow fadeInDown">
                <h1>Knowledge</h1>
            </div>
            <div class="col-lg-9 col-md-9">
                <p class="about-description wow fadeInDown">&nbsp; &nbsp; &nbsp; &nbsp;
                    This is our small initiative to make people aducated about the prossess of being <span
                        class="text-dark">fit.</span> To increase the knowledge of yoga and
                    meditation we are introducing some <a href="./courses-i.php" class="text-decoration-underline">
                        Courses & sessions</a>. By going through these sessions one
                    can start their <span class="text-dark">Yoga & Meditation </span>journey with us.
                </p>
            </div>
        </div>
    </div>
    <?php include("footer-in.php"); ?>
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
            nav: true,
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
                    items: 2,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>
</body>

</html>