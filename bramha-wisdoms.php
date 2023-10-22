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
                <h1>Brahamacharya Wisdoms</h1>
                <p class="w-desk">Definition - What does Brahmacharya mean? Brahmacharya is typically translated as
                    “going after Brahman” or “behavior that leads to Brahman,” with Brahman being the Divine creator, or
                    higher Self, in Hinduism and yoga. It is often associated with celibacy. The Sanskrit term is
                    derived from Brahman, meaning “Ultimate Reality” or “Divine Creator,” and charya, meaning “to move”
                    or “to follow.” Brahmacharya is also frequently translated as “right use of energy.”
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-3 rounded-3 border-1 border p-3">
                <h3 class="heading">ये त्वक्षरमनिर्देश्यमव्यक्तं पर्युपासते | सर्वत्रगमचिन्त्यञ्च कूटस्थमचलन्ध्रुवम् ||
                    सन्नियम्येन्द्रियग्रामं सर्वत्र समबुद्धय: | ते प्राप्नुवन्ति मामेव सर्वभूतहिते रता: ||</h3>
                <p class="text-light">But those who worship the formless aspect of the Absolute Truth—the imperishable,
                    the indefinable, the unmanifest, the all-pervading, the unthinkable, the unchanging, the eternal,
                    and the immoveable—by restraining their senses and being even-minded everywhere, such persons,
                    engaged in the welfare of all beings, also attain Me.

                </p>
            </div>
            <div class="col-lg-6 my-3">

            </div>
            <div class="col-lg-6 my-3 ">

            </div>
            <div class="col-lg-6 my-3 rounded-3 border-1 border p-3">
                <h3 class="heading">यदृच्छालाभसन्तुष्टो द्वन्द्वातीतो विमत्सर: | सम: सिद्धावसिद्धौ च कृत्वापि न निबध्यते
                    ||
                </h3>
                <p class="text-light">Content with whatever gain comes of its own accord, and free from envy, they are
                    beyond the dualities of life. Being equipoised in success and failure, they are not bound by their
                    actions, even while performing all kinds of activities.
                </p>
            </div>
            <div class="col-lg-6 my-3  rounded-3 border-1 border p-3">
                <h3 class="heading">विद्याविनयसम्पन्ने ब्राह्मणे गवि हस्तिनि | शुनि चैव श्वपाके च पण्डिता: समदर्शिन:
                    ||</h3>
                <p class="text-light">The truly learned, with the eyes of divine knowledge, see with equal vision a
                    Brahmin, a cow, an elephant, a dog, and a dog-eater.

                </p>
            </div>
            <div class="col-lg-6 my-3 ">

            </div>
            <div class="col-lg-6 my-3">

            </div>
            <div class="col-lg-6 my-3  rounded-3 border-1 border p-3">
                <h3 class="heading">सर्वद्वाराणि संयम्य मनो हृदि निरुध्य च | मूर्ध्न्याधायात्मन: प्राणमास्थितो
                    योगधारणाम् || 12||
                </h3>
                <p class="text-light">Restraining all the gates of the body and fixing the mind in the heart region, and
                    then drawing the life-breath to the head, one should get established in steadfast yogic
                    concentration.

                </p>
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