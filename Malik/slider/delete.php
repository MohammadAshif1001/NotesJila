<?php
echo $Id = $_GET['ID'];
include_once('../config/database.php');

$query = "SELECT * FROM `tbslider` WHERE `Id` = '$Id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Get the path to the image file
$image_path = "Uploadimage/" . $row['SImage'];

// Delete the image file
if (unlink($image_path)) {
    // If the file was deleted successfully, delete the row from the database
    $query = "DELETE FROM `tbslider` WHERE Id = '$Id'";
    mysqli_query($conn, $query);

    // Redirect to the notes.php page
    header("location:../slider.php");
} else {
    // If the file could not be deleted, display an error message
    echo "Error: Could not delete file";
}

?>
