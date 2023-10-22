<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:login.php');
}


$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'atmayog');
$query = "select * from courses";
$result = mysqli_query($con, $query);

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $course_list[] = $row;
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
    <link rel="stylesheet" href="./admin.css">

    <!-- owl carousel -->
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css"
        rel="stylesheet">
    <title>Yoga-Courses !</title>
</head>

<body>
    <?php include("./admin-nav.php"); ?>
    <a href="./manage-courses.php"><button class="btn btn-dark my-1 mx-5"><i
                class="bi bi-arrow-90deg-left"></i></button></a>
    <h1 class="text-theme text-center"> Manage Yoga Courses</h1>
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#all" type="button"
                    role="tab" aria-controls="all" aria-selected="true">All Courses</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#add" type="button"
                    role="tab" aria-controls="add" aria-selected="false">Add Course</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#delete" type="button"
                    role="tab" aria-controls="delete" aria-selected="false">Delete Course</button>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="home-tab">
                <h1 class="text-center my-3"> All Courses</h1>
                <div class="all-courses row">
                    <?php
                    $sname = "localhost";
                    $uname = "root";
                    $password = "";
                    $db_name = "atmayog";
                    $con = mysqli_connect($sname, $uname, $password, $db_name);
                    $sql = "SELECT * FROM courses ORDER BY id DESC";
                    $res = mysqli_query($con, $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($images = mysqli_fetch_assoc($res)) { ?>
                            
                            <div class="course col-lg-4 col-md-6 my-3 ">
                                <div class="m-1 p-3 border border-1">
                                    <h4 class="text-center ">
                                        <?= $images['course_name'] ?>
                                    </h4>
                                    <img class="admin-course-img" src="uploads/<?= $images['course_image'] ?>">
                                    <p>
                                        <?= $images['course_subheading'] ?>
                                    </p>
                                    <button class="btn btn-primary text-light"><a class="text-light"
                                            href="./edit-courses.php?name= <?= $images['course_name'] ?>">Edit
                                            This
                                            Course</a></button>
                                 
                                </div>
                            </div>

                        <?php }
                    } ?>
                </div>
            </div>
            <div class=" tab-pane fade" id="add" role="tabpanel" aria-labelledby="profile-tab">
                <h1 class="text-center my-3"> Add Course</h1>
                <form class="my-4" action="course-upload.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="coursename" class="form-label">Course Name</label>
                        <input type="text" id="coursename" name="cname" class="form-control"
                            placeholder="Enter Course name">
                    </div>
                    <div class="mb-3">
                        <label for="fileToUpload" class="form-label">Course Thumbnail Image</label>
                        <input type="file" name="cimage" class="form-control" id="fileToUpload">
                    </div>

                    <div class="mb-3">
                        <label for="Category" class="form-label">Course Category</label>
                        <select class="form-select" id="Category" name="ccategory" aria-label="Default select example">
                            <option selected>Not Selected</option>
                            <option value="yoga">Yoga</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="coursesubheading" class="form-label">Course Subheading</label>
                        <input type="text" id="coursesubheading" name="csubheading" class="form-control"
                            placeholder="Enter Course subheading">
                    </div>
                    <button type="submit" value="Upload" name="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
            <div class="tab-pane fade" id="delete" role="tabpanel" aria-labelledby="contact-tab">
                <h1 class="text-center my-3"> Delete Course</h1>
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