<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="container mb-5 pb-5">
        <div class="navbar-outer py-0">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light">
                <div class="container py-0">
                    <a class="navbar-brand py-0 rounded-pill" href="./admin_main.php"><img class="nav-image"
                            src="../assets/yog_lotus.png" alt=""><span class="text-theme">ATMAYOG</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item mx-lg-2 my-0 py-0">
                                <a class="nav-link" href="./manage-courses.php">Manage Courses</a>
                            </li>
                            <li class="nav-item mx-lg-2 my-0 py-0">
                                <a class="nav-link" href="./all-users.php">All users</a>
                            </li>
                            <li class="nav-item mx-lg-2 my-0 py-0">

                            </li>
                        </ul>
                        <div class="d-flex">
                            <a href="./account.php"><button class="btn btn-dark mx-2"> <i
                                        class="bi bi-person-circle"></i> My Account</button></a>
                            <a href="../logout.php"><button class="btn login-btn mb-3">Logout</button></a>

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- <button class="btn btn-outline-dark"> <a class="logout" href="logout.php">Logout</a></button> -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>