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
    <title>Yoga-Courses !</title>
</head>

<body>
    <?php include("./admin-nav.php"); ?>
    <a href="./yoga-courses.php"><button class="btn btn-dark my-1 mx-5"><i
                class="bi bi-arrow-90deg-left"></i></button></a>
    <div class="container my-3">
        <h1 class="text-theme text-center"> Edit Courses</h1>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add new
            topic</button>



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new topic</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="my-4" action="add-topic.php" method="post">
                            <div class="mb-3">
                                <label for="tname" class="form-label">Topic Name</label>
                                <input type="text" id="tname" name="tname" class="form-control"
                                    placeholder="Enter topic name">
                            </div>
                            <div class="mb-3">
                                <label for="tdescription" class="form-label">Description</label>
                                <input type="text" id="tdescription" name="tdescription" class="form-control"
                                    placeholder="Enter description">
                            </div>
                            <div class="mb-3">
                                <label for="turl" class="form-label">Video url</label>
                                <input type="text" id="turl" name="turl" class="form-control" placeholder="Enter url">
                            </div>
                            <div class="mb-3">
                                <label for="cname" class="form-label">Enter Course name correctly</label>
                                <input type="text" id="cname" name="cname" class="form-control"
                                    placeholder="Enter course name">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>









        <div class="all-topics">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <!-- <th scope="col">Sr No</th> -->
                        <th scope="col">name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Video url</th>
                        <th scope="col">Course name</th>
                    </tr>
                </thead>
                <?php


                $sname = "localhost";
                $uname = "root";
                $password = "";
                $db_name = "atmayog";
                $con = mysqli_connect($sname, $uname, $password, $db_name);
                $course = "SELECT * FROM courses";
                $r = mysqli_query($con, $course);
                $c = mysqli_fetch_assoc($r);
                $course_name = $c['course_name'];
                $sql = "SELECT * FROM yoga";
                $res = mysqli_query($con, $sql);
            
                if (mysqli_num_rows($res) > 0) {
                    $cname = (string)$_GET['name'];
                    
                    while ($images = mysqli_fetch_assoc($res)) { 
                        $cn =(string)$images['course_name'];
                          if ( trim($cname," ") == $cn) {
                        ?>
                        
                        <tbody>
                            <tr>
                                <!-- <th scope="row">1</th>/ -->
                                <td>
                                    <?= $images['name'] ?>
                                </td>
                                <td>
                                    <?= $images['description'] ?>
                                </td>
                                <td>
                                    <?= $images['video'] ?>
                                </td>
                                <td>
                                    <?= $images['course_name'] ?>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                }
                 ?>
            </table>


        </div>
    </div>
    <?php include("./admin-footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>