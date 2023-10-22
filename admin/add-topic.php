<?php
if (isset($_POST['submit'])) {


    session_start();
    header('location:edit-courses.php');
    $con = mysqli_connect('localhost', 'root');

    mysqli_select_db($con, 'atmayog');
    if ($con) {
        echo " connection successfull";
    } else {
        echo " connection unsuccessfull";
    }

    $tname = $_POST['tname'];
    $tdescription = $_POST['tdescription'];
    $turl = $_POST['turl'];
    $cname = $_POST['cname'];
    $q = "select * from yoga";
    $result = mysqli_query($con, $q);
    $qi = "insert into yoga(name,description,video,course_name) 
    values ('$tname','$tdescription','$turl','$cname')";
    mysqli_query($con, $qi);
}


?>