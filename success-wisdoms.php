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
                <h1>Success Wisdoms</h1>
                <p class="w-desk">Success is the synonym for the Yash or Yaśa (यश) it means the Success, glory. Success
                    is a way of satisfaction what we do in the flow of work. It needs few things to achieve. these
                    things are explained as follows.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-3 rounded-3 border-1 border p-3">
                <h3 class="heading">निराशीर्यतचित्तात्मा त्यक्तसर्वपरिग्रह: | शारीरं केवलं कर्म कुर्वन्नाप्नोति
                    किल्बिषम् || 21||</h3>
                <p class="text-light">Free from expectations and the sense of ownership, with the mind and intellect
                    fully controlled, they incur no sin even though performing actions by their body.</p>
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
                <h3 class="heading">ज्ञेय: स नित्यसंन्यासी यो न द्वेष्टि न काङ् क्षति | निर्द्वन्द्वो हि महाबाहो सुखं
                    बन्धात्प्रमुच्यते ||
                    ||</h3>
                <p class="text-light">The karm yogis, who neither desire nor hate anything, should be considered always
                    renounced. Free from all dualities, they are easily liberated from the bonds of material energy.</p>
            </div>
            <div class="col-lg-6 my-3 ">

            </div>
            <div class="col-lg-6 my-3">

            </div>
            <div class="col-lg-6 my-3  rounded-3 border-1 border p-3">
                <h3 class="heading">योगस्थ: कुरु कर्माणि सङ्गं त्यक्त्वा धनञ्जय | सिद्ध्यसिद्ध्यो: समो भूत्वा समत्वं योग
                    उच्यते ||</h3>
                <p class="text-light">Be steadfast in the performance of your duty, O Arjun, abandoning attachment to
                    success and failure. Such equanimity is called Yog.</p>
            </div>
            <div class="col-lg-6 my-3 rounded-3 border-1 border p-3">
                <h3 class="heading">दूरेण ह्यवरं कर्म बुद्धियोगाद्धनञ्जय | बुद्धौ शरणमन्विच्छ कृपणा: फलहेतव: ||
                </h3>
                <p class="text-light">Seek refuge in divine knowledge and insight, O Arjun, and discard reward-seeking
                    actions that are certainly inferior to works performed with the intellect established in divine
                    knowledge. Miserly are those who seek to enjoy the fruits of their works.</p>
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