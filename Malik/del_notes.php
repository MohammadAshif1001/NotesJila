<?php

$Id = $_GET['ID'];
include_once("config/database.php");

$query = "SELECT * FROM `notes` WHERE `i_d` = '$Id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Get the path to the image file
$image_path = "../img/img/" . $row['img'];

// Delete the image file
if (unlink($image_path)) {
    // If the file was deleted successfully, delete the row from the database
    $query = "DELETE FROM `notes` WHERE `i_d` = '$Id'";
    mysqli_query($conn, $query);

    // Redirect to the notes.php page
    header("location: notes.php");
} else {
    // If the file could not be deleted, display an error message
    echo "Error: Could not delete file";
}

?>
