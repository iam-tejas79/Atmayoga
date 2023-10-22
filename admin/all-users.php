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
    <title>Atmayog-Users !</title>
</head>

<body>
    <?php include("./admin-nav.php"); ?>
    <div class="container text-center mt-5 py-5">
        <h5 class="text-success">All Users</h5>
    </div>
    <?php
    $con = mysqli_connect('localhost', 'root');


    mysqli_select_db($con, 'atmayog');
    $query = "select * from signin";
    $data = mysqli_query($con, $query);
    $total = mysqli_num_rows($data);
    // echo "$total";
    
    // echo $result['email'] . " " . $result['username'] . " " . $result['mobile'] . " " . $result['password'];
    if ($total != 0) {
        ?>
        <div class="container bg-light outline-dark text-center">
            <table class="table">
                <tr>
                    <th>Sr.No</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Date-of-Birth</th>
                    <th>Password</th>
                    <th>Mobile</th>
                </tr>

                <?php
                while ($result = mysqli_fetch_assoc($data)) {
                    // echo " $result['email'] . " " . $result['username'] . " " . $result['mobile'] . " " . $result['password'] . "<br>" ";
                    echo " <tr >
                      <td for=email>" . $result['id'] . "</td>
                <td for=email>" . $result['name'] . "</td>
                <td>" . $result['email'] . "</td>
                  <td>" . $result['dob'] . "</td>
                <td>" . $result['password'] . "</td>
               <td>" . $result['mob'] . "</td>
                </tr> ";
                }

    } else {
        echo "not having records";
    }
    ?>
        </table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <?php include("./admin-footer.php"); ?>
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