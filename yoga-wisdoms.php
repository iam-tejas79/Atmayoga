<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Genos:wght@300&family=Poppins:wght@100;300;500&display=swap"
        rel="stylesheet">
    <!-- wow css -->
    <link rel="stylesheet" href="./css/wow.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/wisdoms.css">

    <title>Atmayog-wisdoms !</title>
</head>

<body class="yoga-wisdom">

    <?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location:login.php');
    }
    ?>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up-circle"></i></button>
    <a href="./wisdoms.php"><button class="btn btn-dark m-5"><i class="bi bi-arrow-90deg-left"></i></button></a>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="./assets/wisdoms/yoga.png" class="img-fluid ig" alt="">
            </div>
            <div class="col-lg-6 text-light">
                <h1>Yoga Wisdoms</h1>
                <p class="w-desk">Yoga(योग) is made from the sanskrit element yuj(युज) it means to "to attach, join,
                    harness,
                    yoke",
                    join with self, join with nature, join with supreme. Yoga doesn't means some certain positions
                    it is
                    beyond the physical positions. Physical positions are just the medium of health and it is also
                    the
                    development of the satvic guna in one self.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-3 rounded-3 border-1 border p-3">
                <h3 class="heading">आरुरुक्षोर्मुनेर्योगं कर्म कारणमुच्यते | योगारूढस्य तस्यैव शम: कारणमुच्यते ||</h3>
                <p class="text-light">To the soul who is aspiring for perfection in Yog, work without attachment is said
                    to be the means; to the sage who is already elevated in Yog, tranquility in meditation is said to be
                    the means.</p>
            </div>
            <div class="col-lg-6 my-3">

            </div>
            <div class="col-lg-6 my-3 ">

            </div>
            <div class="col-lg-6 my-3 rounded-3 border-1 border p-3">
                <h3 class="heading">यदा हि नेन्द्रियार्थेषु न कर्मस्वनुषज्जते | सर्वसङ्कल्पसंन्यासी योगारूढस्तदोच्यते ||
                </h3>
                <p class="text-light">When one is neither attached to sense objects nor to actions, such a person is
                    said to be elevated in the science of Yog, having renounced all desires for the fruits of actions.
                </p>
            </div>
            <div class="col-lg-6 my-3  rounded-3 border-1 border p-3">
                <h3 class="heading">सुहृन्मित्रार्युदासीनमध्यस्थद्वेष्यबन्धुषु | साधुष्वपि च पापेषु समबुद्धिर्विशिष्यते
                    ||</h3>
                <p class="text-light">The yogis look upon all—well-wishers, friends, foes, the pious, and the
                    sinners—with an impartial intellect. The yogi who is of equal intellect toward friend, companion,
                    and foe, neutral among enemies and relatives, and unbiased between the righteous and sinful, is
                    considered to be distinguished among humans.</p>
            </div>
            <div class="col-lg-6 my-3 ">

            </div>
            <div class="col-lg-6 my-3">

            </div>
            <div class="col-lg-6 my-3  rounded-3 border-1 border p-3">
                <h3 class="heading">शुचौ देशे प्रतिष्ठाप्य स्थिरमासनमात्मन: | नात्युच्छ्रितं नातिनीचं चैलाजिनकुशोत्तरम्
                    ||</h3>
                <p class="text-light">To practice Yog, one should make an āsan (seat) in a sanctified place, by placing
                    Kuśh grass, deer skin, and a cloth, one over the other. The āsan should be neither too high nor too
                    low.</p>
            </div>
            <div class="col-lg-6 my-3 rounded-3 border-1 border p-3">
                <h3 class="heading">युक्ताहारविहारस्य युक्तचेष्टस्य कर्मसु | युक्तस्वप्नावबोधस्य योगो भवति दु:खहा ||
                </h3>
                <p class="text-light">But those who are temperate in eating and recreation, balanced in work, and
                    regulated in sleep, can mitigate all sorrows by practicing Yog.</p>
            </div>
            <div class="col-lg-6 my-3">

            </div>
            <div class="col-lg-6 my-3 ">

            </div>
            <div class="col-lg-6 my-3 rounded-3 border-1 border p-3">
                <h3 class="heading">सङ्कल्पप्रभवान्कामांस्त्यक्त्वा सर्वानशेषत: | मनसैवेन्द्रियग्रामं विनियम्य समन्तत:
                    ||</h3>
                <p class="text-light">Completely renouncing all desires arising from thoughts of the world, one should
                    restrain the senses from all sides with the mind.</p>
            </div>
            <div class="col-lg-6 my-3  rounded-3 border-1 border p-3">
                <h3 class="heading">आरुरुक्षोर्मुनेर्योगं कर्म कारणमुच्यते | योगारूढस्य तस्यैव शम: कारणमुच्यते ||</h3>
                <p class="text-light">To the soul who is aspiring for perfection in Yog, work without attachment is said
                    to be the means; to the sage who is already elevated in Yog, tranquility in meditation is said to be
                    the means.</p>
            </div>
        </div>
    </div>
    <?php include("footer-in.php"); ?>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="./js/wow.js"></script>
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>