<?php

session_start();
header('location:login.php');
$con = mysqli_connect('localhost', 'root');
if ($con) {
    echo " connection successfull";
} else {
    echo " connection unsuccessfull";
}

mysqli_select_db($con, 'atmayog');
$rname = $_POST['name'];
$remail = $_POST['email'];
$rpass = $_POST['password'];
$rdate = $_POST['dob'];
$rmob = $_POST['mob'];

$q = "select * from signin where email = '$remail' && password = '$rpass'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if ($num == 1) {
    echo "user already exists";
} else {
    $qi = "insert into signin(name,email,password,dob,mob) values ('$rname','$remail','$rpass','$rdate','$rmob')";
    mysqli_query($con, $qi);
}
?>