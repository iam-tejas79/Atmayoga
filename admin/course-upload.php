<?php
// if (isset($_POST['submit'])) {


//     session_start();
//     header('location:yoga-courses.php');
//     $con = mysqli_connect('localhost', 'root');
//     if ($con) {
//         echo " connection successfull";
//     } else {
//         echo " connection unsuccessfull";
//     }

//     mysqli_select_db($con, 'atmayog');
//     $cname = $_POST['cname'];

//     // image part goes here
//     $cimage = $_FILES['cimage'];
//     $new_img_name = uniqid("IMG-", true);
//     $new_img_path = 'uploads/' . $new_img_name;

//     $cdescription = $_POST['cdescription'];
//     $ccategory = $_POST['ccategory'];
//     $csubheading = $_POST['csubheading'];
//     $cvideo = $_POST['cvideo'];
//     $cadvantages = $_POST['cadvantages'];


//     $q = "select * from courses";
//     $result = mysqli_query($con, $q);
//     $qi = "insert into courses(course_name,course_image,course_description,course_category,course_subheading,course_video,advantages) 
//     values ('$cname','$new_img_name','$cdescription','$ccategory','$csubheading','$cvideo','$cadvantages')";
//     mysqli_query($con, $qi);
// }
$cname;

?>
<?php

if (isset($_POST['submit'])) {

    header('location:yoga-courses.php');
    $con = mysqli_connect('localhost', 'root');
    mysqli_select_db($con, 'atmayog');

    $cname = $_POST['cname'];
    // $cdescription = $_POST['cdescription'];
    $ccategory = $_POST['ccategory'];
    $csubheading = $_POST['csubheading'];
    // $cvideo = $_POST['cvideo'];
    // $cadvantages = $_POST['cadvantages'];
    // echo "<pre>";
    // print_r($_FILES['cimage']);
    // echo "</pre>";
    $img = $_FILES['cimage'];
    $img_name = $_FILES['cimage']['name'];
    $img_size = $_FILES['cimage']['size'];
    $tmp_name = $_FILES['cimage']['tmp_name'];
    $error = $_FILES['cimage']['error'];

    if ($error === 0) {
        if ($img_size > 725000) {
            $em = "Sorry, your file is too large.";
            header("Location: index.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = './uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $sql = "insert into courses(course_name,course_image,course_category,course_subheading) 
    values ('$cname','$new_img_name','$ccategory','$csubheading')";
                mysqli_query($con, $sql);
                header("Location: yoga-courses.php");
            } else {
                $em = "You can't upload files of this type";
                header("Location: index.php?error=$em");
            }
        }
    } else {
        $em = "unknown error occurred!";
        // header("Location: yoga-courses.php");
        echo "outer1 else";
    }

} else {
    // header("Location: yoga-courses.php");
    echo "outer2 else";
}
?>