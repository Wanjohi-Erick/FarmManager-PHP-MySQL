<?php
    require "dbConn.php";
    $name = $_POST["name"];
    $units = $_POST["units"];
    $land = $_POST["land"];

    $postSQL = "INSERT INTO `crops` (`ID`, `cropName`, `measurementUnit`, `Land`) Values (NULL, '$name', '$units', '$land')";
    $postQueryFX = mysqli_query($connect, $postSQL);

    if ($postQueryFX) {
        echo "Success";
    } else {
        echo "failed";
    }
    
?>