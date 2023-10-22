<?php

session_start();
// header('location:login.php');
$con = mysqli_connect('localhost', 'root');
if ($con) {
    echo " connection successfull";
} else {
    echo " connection unsuccessfull";
}

mysqli_select_db($con, 'atmayog');

$remail = $_POST['email'];
$rpass = $_POST['password'];
$q = "select * from signin where email = '$remail' && password = '$rpass'";
$result = mysqli_query($con, $q);
$r = mysqli_fetch_assoc($result);
$num = mysqli_num_rows($result);
if ($num == 1) {
    if ($r['email'] == 'admin@gmail.com') {
        header("location:admin/admin_main.php");
        $_SESSION['email'] = $remail;
        $_SESSION['password'] = $rpass;
        $_SESSION['name'] = $r['name'];
        $_SESSION['dob'] = $r['dob'];
        $_SESSION['mob'] = $r['mob'];

    } else {
        header('location:home.php');
        $_SESSION['email'] = $remail;
        $_SESSION['password'] = $rpass;
        $_SESSION['name'] = $r['name'];
        $_SESSION['dob'] = $r['dob'];
        $_SESSION['mob'] = $r['mob'];
    }

} else {
    header('location:login.php');
}
?>