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
    <link rel="stylesheet" href="../css/wow.css">
    <!-- Bootstrap CSS -->
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <!-- owl carousel -->
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css"
        rel="stylesheet">
    <title>Atmayog-Admin !</title>
</head>

<body>
    <?php include("./admin-nav.php"); ?>
    <button class="btn btn-dark mx-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
        aria-controls="offcanvasExample">
        <i class="bi bi-three-dots"></i>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel"> <img src="../assets/yog_lotus.png"></img> Admin
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <li class="list-group-item li-a"><a class="sidebar-a" href="./manage-courses.php">Manage
                        Courses</a></li>
                <li class="list-group-item li-a"><a class="sidebar-a" href="./all-users.php">All Users</a></li>
                <li class="list-group-item li-a"><a class="sidebar-a" href="./account.php">My Profile</a></li>
                <li class="list-group-item li-a"><a class="sidebar-a" href="../logout.php">Logout</a></li>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <h4 class="text-success text-center"> <img src="../assets/yog_lotus.png" class="small-logo"></img> Admin -
            Dashboard</h4>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 col-md-6">
                    <a href="./manage-courses.php">
                        <div class="m-3 text-center">
                            <h5>Manage Courses</h5>
                            <img class="admin-sessions" src="../assets/courses-admin.jfif" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <a href="./all-users.php">
                        <div class="m-3 text-center">
                            <h5>All Users</h5>
                            <img class="admin-sessions" src="../assets/all-users.jfif" alt="">
                        </div>
                    </a>
                </div>
                <!-- <div class="col-lg-6 col-md-6">
                    <div class="m-3 text-center">
                        <h5>Admin</h5>
                        <img class="admin-sessions" src="../assets/courses-admin.jfif" alt="">
                    </div>
                </div> -->
            </div>
        </div>
    </div>


    <?php include("./admin-footer.php"); ?>
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