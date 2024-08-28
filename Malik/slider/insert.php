<?php

if (isset($_POST['submit'])) {
    include_once('../config/database.php');
    $slider_link = $_POST['Slink'];
    $image_loc = $_FILES['Simage']['tmp_name'];
    $image_name = $_FILES['Simage']['name'];
    $img_des = "Uploadimage/" . $image_name;

    move_uploaded_file($image_loc, "Uploadimage/" . $image_name);


    mysqli_query($conn, "INSERT INTO `tbslider`( `SLink`, `SImage`) 
    VALUES ( '$slider_link','$image_name')");
    header("location:../slider.php");
}

?>

